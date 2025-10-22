<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/msac/templates/_includes/global/translation-modal.html.twig */
class __TwigTemplate_6356665637093b3a4aff50a81b51c1df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"translation-modal modal\" id=\"translation-modal\" aria-hidden=\"true\">
    <div class=\"modal__overlay\" tabindex=\"-1\" data-micromodal-close>
        <div class=\"modal__container\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"translation-modal\">
            <div class=\"modal__header\">
\t            <button class=\"modal__close\" aria-label=\"Close modal\" data-micromodal-close>
                    <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><g fill=\"#FFF\" fill-rule=\"evenodd\"><path d=\"M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z\"/><path d=\"M10.907 6v4.908H6v2.185h4.907V18h2.185v-4.907H18v-2.185h-4.908V6z\"/></g></svg>
                </button>
                <h2 class=\"modal__title\" id=\"translation-modal-title\">Translate</h2>
            </div>

            <div class=\"modal__content\" id=\"translation-modal-content\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=es\" class=\"translateLink\">Spanish</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=zh-CN\" class=\"translateLink\">Chinese - Simplified</a></li>
\t\t\t\t\t<li class=\"delimiter\"><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=zh-TW\" class=\"translateLink\">Chinese - Traditional</a></li>

\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=af\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Afrikaans </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sq\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Albanian - shqiptar</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=am\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Amharic - አማርኛ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ar\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Arabic -  عربى </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=hy\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Armenian -Հայերէն </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=az\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Azerbaijani - Azərbaycan</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=eu\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Basque - Euskal </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=be\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Belarusian -беларускі</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=bn\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Bengali - বাঙালি</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=bs\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Bosnian -  bBosanski </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=bg\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Bulgarian - български </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ca\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Catalan - Català</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ceb\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Cebuano</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ny\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Chichewa</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=co\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Corsican - Corsu</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=hr\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Croatian - hrvatski</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=cs\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Czech - čeština</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=da\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Danish - dansk</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=nl\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Dutch - Nederlands</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=eo\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Esperanto</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=et\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Estonian - Eesti keel</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=tl\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Filipino</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=fi\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Finnish - Suomalainen</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=fr\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">French - français</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=fy\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Frisian - Frysk</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=gl\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Galician - Galego</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ka\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Georgian - ქართული</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=de\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">German - Deutsche</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=el\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Greek - Ελληνικά</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=gu\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Gujarati - ગુજરાતી</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ht\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Haitian Creole - Kreyòl Ayisyen</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ha\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hausa</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=haw\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hawaiian - ʻŌlelo Hawaiʻi</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=iw\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hebrew - עִברִית</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=hi\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hindi - हिंदी</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=hmn\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hmong - Hmoob</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=hu\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Hungarian - Magyar</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=is\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Icelandic - Íslensku</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ig\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Igbo</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=id\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Indonesian - bahasa Indonesia</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ga\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Irish - Gaeilge</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=it\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Italian - italiano</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ja\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Japanese - 日本語</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=jw\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Javanese - Wong Jawa</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=kn\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Kannada - ಕನ್ನಡ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=kk\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Kazakh - Қазақша</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=km\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Khmer - ភាសាខ្មែរ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ko\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Korean - 한국어</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ku\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Kurdish (Kurmanji) - Kurdî</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ky\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Kyrgyz - Кыргызча</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=lo\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Lao - ລາວ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=la\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Latin - Latine</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=lv\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Latvian - Latviešu</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=lt\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Lithuanian - Lietuviškai</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=lb\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Luxembourgish - lëtzebuergesch</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mk\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Macedonian - Македонски</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mg\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Malagasy</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ms\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Malay - Melayu</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ml\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Malayalam - മലയാളം</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mt\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Maltese - Malti</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mi\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Maori</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mr\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Marathi - मराठी</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=mn\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Mongolian - Монгол хэл</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=my\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Myanmar (Burmese) </a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ne\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Nepali - नेपाली</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=no\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Norwegian - norsk</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ps\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Pashto - پښتو</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=fa\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Persian - فارسی</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=pl\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Polish - Polskie</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=pt\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Portuguese - Português</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=pa\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Punjabi - ਪੰਜਾਬੀ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ro\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Romanian - Română</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ru\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Russian - русский</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sm\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Samoan - Samoa</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=gd\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Scots Gaelic - Gàidhlig na h-Alba</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sr\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Serbian - Српски</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=st\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Sesotho</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sn\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Shona</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sd\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Sindhi - سنڌي</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=si\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Sinhala - සිංහල</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sk\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Slovak - slovenský</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sl\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Slovenian - Slovenščina</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=so\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Somali</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=su\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Sundanese - Sunda</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sw\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Swahili - Kiswahili</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=sv\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Swedish - svenska</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=tg\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Tajik - Тоҷикӣ</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ta\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Tamil - தமிழ்</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=te\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Telugu - తెలుగు</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=th\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Thai - ไทย</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=tr\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Turkish - Türk</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=uk\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Ukrainian - Українська</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=ur\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Urdu - اردو</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=uz\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Uzbek - O\"zbek</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=vi\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Vietnamese - Tiếng Việt</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=cy\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Welsh - Cymraeg</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=xh\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Xhosa - isiXhosa</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=yi\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Yiddish - ייִדיש</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=yo\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Yoruba - Yorùbá</a></li>
\t\t\t\t\t<li><a href=\"https://translate.google.com/translate?hl=en&amp;sl=en&amp;u=";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
        echo "&tl=zu\" class=\"mdgov_iaLink translateLink\" style=\"font-size: small;\">Zulu</a></li>
\t\t\t\t</ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/msac/templates/_includes/global/translation-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 116,  458 => 115,  454 => 114,  450 => 113,  446 => 112,  442 => 111,  438 => 110,  434 => 109,  430 => 108,  426 => 107,  422 => 106,  418 => 105,  414 => 104,  410 => 103,  406 => 102,  402 => 101,  398 => 100,  394 => 99,  390 => 98,  386 => 97,  382 => 96,  378 => 95,  374 => 94,  370 => 93,  366 => 92,  362 => 91,  358 => 90,  354 => 89,  350 => 88,  346 => 87,  342 => 86,  338 => 85,  334 => 84,  330 => 83,  326 => 82,  322 => 81,  318 => 80,  314 => 79,  310 => 78,  306 => 77,  302 => 76,  298 => 75,  294 => 74,  290 => 73,  286 => 72,  282 => 71,  278 => 70,  274 => 69,  270 => 68,  266 => 67,  262 => 66,  258 => 65,  254 => 64,  250 => 63,  246 => 62,  242 => 61,  238 => 60,  234 => 59,  230 => 58,  226 => 57,  222 => 56,  218 => 55,  214 => 54,  210 => 53,  206 => 52,  202 => 51,  198 => 50,  194 => 49,  190 => 48,  186 => 47,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  61 => 15,  57 => 14,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/msac/templates/_includes/global/translation-modal.html.twig", "/Users/bb/sites/msac-drupal/themes/custom/msac/templates/_includes/global/translation-modal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("url" => 13);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
