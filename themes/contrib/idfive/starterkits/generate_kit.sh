#
# This script cretaes a child theme for the idfive ICL theme.
#
# You may pass parameters directly to it, via: `sh generate_kit.sh "Theme HR Name" theme_machine_name`
#
# Dependencies:
# - git
#

# Get vars, if passed into the script
theme_name=$1
theme_machine_name=$2

# Check HR name is not empty, ask for it if so
if [ "$theme_name" = "" ]; then
    echo "Theme human readable name (e.g. My Awesome Client):"
    read theme_name
fi

# Check Machine name is not empty, ask for it if so
if [ "$theme_machine_name" = "" ]; then
    echo "Theme machine name (e.g. my_awesome_client):"
    read theme_machine_name
fi

# Check HR name is not empty
if [ -z "$theme_name" ]; then
  echo "Theme name cannot be empty"
  exit 2
fi

# Check Machine name is not empty
if [ -z "$theme_machine_name" ]; then
  echo "Theme machine name cannot be empty"
  exit 2
fi

echo "Copying icl starterkit"
cp -R icl ../../../custom/$theme_machine_name
echo "Changing to ${theme_machine_name} theme"
cd ../../../custom/$theme_machine_name
echo "Modifying theme filenames"
mv config/install/THEMEMACHINENAME.settings.yml config/install/$theme_machine_name.settings.yml
mv config/schema/THEMEMACHINENAME.schema.yml config/install/$theme_machine_name.schema.yml
mv THEMEMACHINENAME.starterkit.yml $theme_machine_name.info.yml
mv THEMEMACHINENAME.libraries.yml $theme_machine_name.libraries.yml
mv THEMEMACHINENAME.theme $theme_machine_name.theme
echo "Renaming theme functions"
find . -type f -exec sed -i '' -e "s/THEMEMACHINENAME/${theme_machine_name}/g" {} \;
find . -type f -exec sed -i '' -e "s/THEMENAME/${theme_name}/g" {} \;
echo "Cloning master branch of idfive Component Library into theme"
git clone git@bitbucket.org:idfivellc/idfive-pattern-lab-starter.git idfive-component-library
rm -R idfive-component-library/.git
echo "Your new theme is now available in the theme folder as ${theme_machine_name}"
echo "Next Step: Profit"