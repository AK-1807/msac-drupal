<template>
  <div :class="calendarClass">
    <div class="calendar__arrows">
      <button
        type="button"
        class="calendar__arrow calendar__arrow--previous"
        aria-label="View previous month"
        @click="previousMonthClick"
      >
        <span class="visible-for-screen-readers">View previous month</span>
      </button>
      <button
        type="button"
        class="calendar__arrow calendar__arrow--next"
        aria-label="View next month"
        @click="nextMonthClick"
      >
        <span class="visible-for-screen-readers">View next month</span>
      </button>
    </div>
    <div class="calendar__month-name">{{ selectedMonth }}</div>
    <div class="calendar__date-range-controls">
      <div>
        <div class="form-label" aria-hidden="true">Start</div>
        <button :class="startControlClass" @click="toggleEditingStartDate" aria-label="Select start date">
          <span v-if="startTimestamp" v-html="formattedStartDate"></span>
          <span v-else>Start</span>
        </button>
        <input
          type="text"
          v-model="manualStartInput"
          @change="onManualStartInput"
          placeholder="MM/DD/YY"
          class="calendar__manual-input"
          aria-label="Enter start date manually"
        />
      </div>
      <div>
        <div class="form-label" aria-hidden="true">End</div>
        <button :class="endControlClass" @click="toggleEditingEndDate" aria-label="Select end date">
          <span v-if="endTimestamp" v-html="formattedEndDate"></span>
          <span v-else>End</span>
        </button>
        <input
          type="text"
          v-model="manualEndInput"
          @change="onManualEndInput"
          placeholder="MM/DD/YY"
          class="calendar__manual-input"
          aria-label="Enter end date manually"
        />
      </div>
    </div>

    <div class="calendar__weekday-labels">
      <div class="calendar__weekday-label" v-for="(label, i) in weekdayLabels" :key="`weekday-label=${i}`">
        <span class="visible-for-screen-readers">{{ weekdayNames[i] }}</span>
        <span aria-hidden="true">{{ label }}</span>
      </div>
    </div>
    <div class="calendar__weeks">
      <div class="calendar__week" v-for="(week, i) in weeksInMonth" :key="`week-${i}`">
        <div class="calendar__day-wrapper" v-for="(day, j) in week" :key="`week-${i}-day-${j}`">
          <div class="calendar__day calendar__day--padding" role="presentation" v-if="!day"></div>
          <button
            :class="dayClasses(day.moment)"
            :disabled="dayDisabled(day.moment)"
            type="button"
            v-else
            @click="dayClick(day.moment)"
          >
            <span class="visible-for-screen-readers">{{ day.label }}</span>
            <span aria-hidden="true">{{ day.number }}</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import * as moment from "moment";
export default {
  created() {
    // We need to use the timestamp because Vue doesn't pick up on changes to the actual moment object
    this.startTimestamp = this.startDate.unix();
    if (this.endDate) {
      this.endTimestamp = this.endDate.unix();
    } else {
      this.endTimestamp = this.startDate.unix();
    }
    this.calendarMoment = this.startDate.clone().date(1);
    this.weekdayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  },
  data() {
    return {
      startTimestamp: null,
      endTimestamp: null,
      calendarMoment: null,
      editingStartDate: false,
      editingEndDate: false,
      manualStartInput: "",
      manualEndInput: "",
    };
  },
  props: {
    startDate: {
      default: moment(),
    },
    endDate: {
      default: null,
    },
    weekdayLabelChars: {
      type: Number,
      default: 1,
    },
    onDateChange: {
      type: Function,
      default: () => {},
    },
  },
  computed: {
    selectedMonth() {
      return this.calendarMoment.format("MMMM 'YY");
    },
    weekdayLabels() {
      return ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"].map((d) =>
        d.substring(0, this.weekdayLabelChars)
      );
    },
    weeksInMonth() {
      // Create moment object for the first day of the current month
      const daysInMonth = [];
      const weeksInMonth = [];
      const beginningPaddingCount = parseInt(this.calendarMoment.startOf("month").format("d"));
      const daysInMonthCount = this.calendarMoment.daysInMonth();
      const endingPaddingCount = 7 - ((beginningPaddingCount + daysInMonthCount) % 7);

      // Add offset caused by dates from previous month in first week of this month
      for (let i = 0; i < beginningPaddingCount; i++) {
        daysInMonth.push(null);
      }

      // Add day objects for all days in this month
      for (let i = 1; i <= daysInMonthCount; i++) {
        const dayMoment = this.calendarMoment.clone().set("date", i);
        daysInMonth.push({
          label: `Select ${dayMoment.format("dddd, MMMM Do, YYYY")}`,
          number: i,
          moment: dayMoment,
        });
      }

      // Add padding for last week
      for (let i = 0; i < endingPaddingCount; i++) {
        daysInMonth.push(null);
      }

      // Group all days into weeks
      for (let i = 0; i < Math.ceil(daysInMonth.length / 7); i++) {
        weeksInMonth.push(daysInMonth.slice(i * 7, (i + 1) * 7));
      }

      return weeksInMonth;
    },
    formattedStartDate() {
      if (!!this.startTimestamp) {
        return moment.unix(this.startTimestamp).format("M/D/YY");
      }
    },
    formattedEndDate() {
      if (!!this.endTimestamp) {
        return moment.unix(this.endTimestamp).format("M/D/YY");
      }
    },
    calendarClass() {
      return {
        calendar: true,
        "calendar--editing": this.editingStartDate || this.editingEndDate,
      };
    },
    startControlClass() {
      return {
        "calendar__date-range-control": true,
        button: true,
        "calendar__date-range-control--active": this.editingStartDate,
      };
    },
    endControlClass() {
      return {
        "calendar__date-range-control": true,
        button: true,
        "calendar__date-range-control--active": this.editingEndDate,
      };
    },
  },
  methods: {
    previousMonthClick() {
      this.calendarMoment = this.calendarMoment.clone().subtract(1, "month");
    },
    nextMonthClick() {
      this.calendarMoment = this.calendarMoment.clone().add(1, "month");
    },
    dayClick(selectedDay) {
      if (this.editingStartDate || this.editingEndDate) {
        if (this.editingStartDate) {
          this.startTimestamp = selectedDay.unix();
          this.$emit("update:startDate", moment.unix(this.startTimestamp));
          this.editingStartDate = false;
        }
        if (this.editingEndDate) {
          if (selectedDay.isSame(this.startDate, "day") || selectedDay.isSame(this.endDate, "day")) {
            this.endTimestamp = this.startDate.unix();
          } else {
            this.endTimestamp = selectedDay.unix();
          }
          if (!!this.endTimestamp) {
            this.$emit("update:endDate", moment.unix(this.endTimestamp));
          } else {
            this.$emit("update:endDate", null);
          }
          this.editingEndDate = false;
        }
      }
    },
    dayClasses(dayMoment) {
      const isActive =
        moment.unix(this.startTimestamp).isSame(dayMoment) || moment.unix(this.endTimestamp).isSame(dayMoment);
      const isInRange =
        !!this.endTimestamp &&
        !this.editingStartDate &&
        !this.editingEndDate &&
        !dayMoment.isBefore(this.startDate) &&
        !dayMoment.isSame(this.startDate, "day") &&
        dayMoment.isBefore(this.endDate, "day");

      return {
        calendar__day: true,
        "calendar__day--active": isActive,
        "calendar__day--in-range": isInRange,
      };
    },
    dayDisabled(dayMoment) {
      if (this.editingStartDate) {
        if (!!this.endTimestamp) {
          return !dayMoment.isBefore(this.endDate, "day");
        } else {
          return false;
        }
      } else if (this.editingEndDate) {
        return dayMoment.isBefore(this.startDate, "day");
      } else {
        return false;
      }
    },
    getPaddingFromWeek(week) {
      return week.filter((d) => !d);
    },
    getDaysFromWeek(week) {
      return week.filter((d) => !!d);
    },
    toggleEditingStartDate() {
      this.editingStartDate = !this.editingStartDate;
      this.editingEndDate = false;
      if (this.calendarMoment.unix() > this.startTimestamp) {
        this.calendarMoment = moment.unix(this.startTimestamp).date(1);
      }
    },
    toggleEditingEndDate() {
      this.editingEndDate = !this.editingEndDate;
      this.editingStartDate = false;
      if (this.calendarMoment.unix() < this.endTimestamp) {
        this.calendarMoment = moment.unix(this.endTimestamp).date(1);
      }
    },
     onManualStartInput() {
        const parsed = moment(this.manualStartInput, "MM/DD/YY", true);
        if (parsed.isValid()) {
          this.startTimestamp = parsed.unix();
          this.$emit("update:startDate", parsed);
          this.calendarMoment = parsed.clone().date(1);
        } else {
          alert("Invalid start date format. Please use MM/DD/YY.");
        }
      },
    onManualEndInput() {
      const parsed = moment(this.manualEndInput, "MM/DD/YY", true);
      if (parsed.isValid()) {
        this.endTimestamp = parsed.unix();
        this.$emit("update:endDate", parsed);
        this.calendarMoment = parsed.clone().date(1);
      } else {
        alert("Invalid end date format. Please use MM/DD/YY.");
      }
    },
  },
};
</script>
