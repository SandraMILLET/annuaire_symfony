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

/* email/email.html.twig */
class __TwigTemplate_407a414d5db67550c043b02c02a325510becc033ebab3e00a87df4f465a58768 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html
    PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html
    style=\"width:100%;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;\">

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <title>Nouveau modèle de courrier électronique 2020-04-23</title>
    <!--[if (mso 16)]><style type=\"text/css\">    a {text-decoration: none;}    </style><![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if !mso]><!-- -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i\" rel=\"stylesheet\">
    <!--<![endif]-->
    <style type=\"text/css\">
        @media only screen and (max-width:600px) {
            .st-br {
                padding-left: 10px !important;
                padding-right: 10px !important
            }

            p,
            ul li,
            ol li,
            a {
                font-size: 16px !important;
                line-height: 150% !important
            }

            h1 {
                font-size: 30px !important;
                text-align: center;
                line-height: 120% !important
            }

            h2 {
                font-size: 26px !important;
                text-align: center;
                line-height: 120% !important
            }

            h3 {
                font-size: 20px !important;
                text-align: center;
                line-height: 120% !important
            }

            h1 a {
                font-size: 30px !important;
                text-align: center
            }

            h2 a {
                font-size: 26px !important;
                text-align: center
            }

            h3 a {
                font-size: 20px !important;
                text-align: center
            }

            .es-menu td a {
                font-size: 14px !important
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 16px !important
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important
            }

            *[class=\"gmail-fix\"] {
                display: none !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-button-border {
                display: block !important
            }

            a.es-button {
                font-size: 16px !important;
                display: block !important;
                border-left-width: 0px !important;
                border-right-width: 0px !important
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-m-p0 {
                padding: 0px !important
            }

            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p0t {
                padding-top: 0px !important
            }

            .es-m-p0b {
                padding-bottom: 0 !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            .es-desk-menu-hidden {
                display: table-cell !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            table.es-social {
                display: inline-block !important
            }

            table.es-social td {
                display: inline-block !important
            }
        }

        .rollover:hover .rollover-first {
            max-height: 0px !important;
            display: none !important;
        }

        .rollover:hover .rollover-second {
            max-height: none !important;
            display: block !important;
        }

        #outlook a {
            padding: 0;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        .es-button-border:hover {
            border-style: solid solid solid solid !important;
            background: #d6a700 !important;
            border-color: #42d159 #42d159 #42d159 #42d159 !important;
        }

        .es-button-border:hover a.es-button {
            background: #d6a700 !important;
            border-color: #d6a700 !important;
        }
    </style>
</head>

<body
    style=\"width:100%;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;\">
    <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6;\">
        <!--[if gte mso 9]><v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\"> <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill> </v:background><![endif]-->
        <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;\">
            <tr style=\"border-collapse:collapse;\">
                <td class=\"st-br\" valign=\"top\" style=\"padding:0;Margin:0;\">
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-header\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\"
                                style=\"padding:0;Margin:0;background-image:url(https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png);background-color:transparent;background-position:center bottom;background-repeat:repeat;\"
                                bgcolor=\"transparent\"
                                background=\"https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png\">
                                <!--[if gte mso 9]><v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"mso-width-percent:1000;height:204px;\">
<v:fill type=\"tile\" src=\"https://pics.esputnik.com/repository/home/17278/common/images/1546958148946.jpg\" color=\"#343434\" origin=\"0.5, 0\" position=\"0.5,0\"></v:fill><v:textbox inset=\"0,0,0,0\"><![endif]-->
                                <div>
                                    <table bgcolor=\"transparent\" class=\"es-header-body\" align=\"center\" cellpadding=\"0\"
                                        cellspacing=\"0\" width=\"600\"
                                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                        <tr style=\"border-collapse:collapse;\">
                                            <td align=\"left\"
                                                style=\"padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;\">
                                                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                    <tr style=\"border-collapse:collapse;\">
                                                        <td width=\"560\" align=\"center\" valign=\"top\"
                                                            style=\"padding:0;Margin:0;\">
                                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                                role=\"presentation\"
                                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td align=\"center\" style=\"padding:0;Margin:0;\">
                                                                        <p
                                                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:32px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:48px;color:#FFFFFF;\">
                                                                            <strong>Annuaire de l'aude</strong></p>
                                                                    </td>
                                                                </tr>
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td align=\"center\" height=\"65\"
                                                                        style=\"padding:0;Margin:0;\"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if gte mso 9]></v:textbox></v:rect><![endif]-->
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\" bgcolor=\"transparent\"
                                style=\"padding:0;Margin:0;background-color:transparent;\">
                                <table bgcolor=\"transparent\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\"
                                            style=\"Margin:0;padding-bottom:15px;padding-top:30px;padding-left:30px;padding-right:30px;border-radius:10px 10px 0px 0px;background-color:#FFFFFF;background-position:left bottom;\"
                                            bgcolor=\"#ffffff\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"540\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left bottom;\"
                                                            role=\"presentation\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" style=\"padding:0;Margin:0;\">
                                                                    <h1
                                                                        style=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#212121;\">
                                                                        Email de l'Annuaire de l'Aude</h1>
                                                                </td>
                                                            </tr>
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\"
                                                                    style=\"padding:0;Margin:0;padding-top:20px;\">
                                                                    <p
                                                                        style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#131313;\">
                                                                        <!-ici un text d'entête-></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\"
                                            style=\"Margin:0;padding-top:5px;padding-bottom:5px;padding-left:30px;padding-right:30px;border-radius:0px 0px 10px 10px;background-position:left top;background-color:#FFFFFF;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"540\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"left\" style=\"padding:0;Margin:0;\">
                                                                    <ul>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                           <label>Adresse mail de l'expéditeur : </label>

                                                                           ";
        // line 400
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 400, $this->source); })()), "email", [], "any", false, false, false, 400), "html", null, true);
        echo " </li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                             <label> Nom et Prénom de l'expéditeur :  </label>
                                                                             ";
        // line 404
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 404, $this->source); })()), "name", [], "any", false, false, false, 404), "html", null, true);
        echo "</li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label> Numéro de téléphonne de l'expéditeur : </label>
                                                                            ";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 408, $this->source); })()), "tel", [], "any", false, false, false, 408), "html", null, true);
        echo "</li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label>Sujet du message : </label>
                                                                            ";
        // line 412
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 412, $this->source); })()), "object", [], "any", false, false, false, 412), "html", null, true);
        echo "</li>
                                                                            
                                                                            <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label>Contenu du message : </label>
                                                                            ";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 417, $this->source); })()), "message", [], "any", false, false, false, 417), "html", null, true);
        echo "</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\" style=\"padding:0;Margin:0;\">
                                <table bgcolor=\"transparent\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\" style=\"padding:0;Margin:0;background-position:left top;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"600\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" height=\"40\" bgcolor=\"transparent\"
                                                                    style=\"padding:0;Margin:0;\"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#F6F6F6;background-repeat:repeat;background-position:center top;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\"
                                style=\"padding:0;Margin:0;background-image:url(https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png);background-position:center bottom;background-repeat:repeat;\"
                                background=\"https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png\">
                                <table bgcolor=\"#31cb4b\" class=\"es-footer-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\" style=\"padding:0;Margin:0;background-position:left top;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"600\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" height=\"40\"
                                                                    style=\"padding:0;Margin:0;\"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 417,  465 => 412,  458 => 408,  451 => 404,  444 => 400,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html
    PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html
    style=\"width:100%;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;\">

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <title>Nouveau modèle de courrier électronique 2020-04-23</title>
    <!--[if (mso 16)]><style type=\"text/css\">    a {text-decoration: none;}    </style><![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if !mso]><!-- -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i\" rel=\"stylesheet\">
    <!--<![endif]-->
    <style type=\"text/css\">
        @media only screen and (max-width:600px) {
            .st-br {
                padding-left: 10px !important;
                padding-right: 10px !important
            }

            p,
            ul li,
            ol li,
            a {
                font-size: 16px !important;
                line-height: 150% !important
            }

            h1 {
                font-size: 30px !important;
                text-align: center;
                line-height: 120% !important
            }

            h2 {
                font-size: 26px !important;
                text-align: center;
                line-height: 120% !important
            }

            h3 {
                font-size: 20px !important;
                text-align: center;
                line-height: 120% !important
            }

            h1 a {
                font-size: 30px !important;
                text-align: center
            }

            h2 a {
                font-size: 26px !important;
                text-align: center
            }

            h3 a {
                font-size: 20px !important;
                text-align: center
            }

            .es-menu td a {
                font-size: 14px !important
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 16px !important
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important
            }

            *[class=\"gmail-fix\"] {
                display: none !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-button-border {
                display: block !important
            }

            a.es-button {
                font-size: 16px !important;
                display: block !important;
                border-left-width: 0px !important;
                border-right-width: 0px !important
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-m-p0 {
                padding: 0px !important
            }

            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p0t {
                padding-top: 0px !important
            }

            .es-m-p0b {
                padding-bottom: 0 !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            .es-desk-menu-hidden {
                display: table-cell !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            table.es-social {
                display: inline-block !important
            }

            table.es-social td {
                display: inline-block !important
            }
        }

        .rollover:hover .rollover-first {
            max-height: 0px !important;
            display: none !important;
        }

        .rollover:hover .rollover-second {
            max-height: none !important;
            display: block !important;
        }

        #outlook a {
            padding: 0;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        .es-button-border:hover {
            border-style: solid solid solid solid !important;
            background: #d6a700 !important;
            border-color: #42d159 #42d159 #42d159 #42d159 !important;
        }

        .es-button-border:hover a.es-button {
            background: #d6a700 !important;
            border-color: #d6a700 !important;
        }
    </style>
</head>

<body
    style=\"width:100%;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;\">
    <div class=\"es-wrapper-color\" style=\"background-color:#F6F6F6;\">
        <!--[if gte mso 9]><v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\"> <v:fill type=\"tile\" color=\"#f6f6f6\"></v:fill> </v:background><![endif]-->
        <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;\">
            <tr style=\"border-collapse:collapse;\">
                <td class=\"st-br\" valign=\"top\" style=\"padding:0;Margin:0;\">
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-header\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\"
                                style=\"padding:0;Margin:0;background-image:url(https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png);background-color:transparent;background-position:center bottom;background-repeat:repeat;\"
                                bgcolor=\"transparent\"
                                background=\"https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png\">
                                <!--[if gte mso 9]><v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"mso-width-percent:1000;height:204px;\">
<v:fill type=\"tile\" src=\"https://pics.esputnik.com/repository/home/17278/common/images/1546958148946.jpg\" color=\"#343434\" origin=\"0.5, 0\" position=\"0.5,0\"></v:fill><v:textbox inset=\"0,0,0,0\"><![endif]-->
                                <div>
                                    <table bgcolor=\"transparent\" class=\"es-header-body\" align=\"center\" cellpadding=\"0\"
                                        cellspacing=\"0\" width=\"600\"
                                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                        <tr style=\"border-collapse:collapse;\">
                                            <td align=\"left\"
                                                style=\"padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;\">
                                                <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                    <tr style=\"border-collapse:collapse;\">
                                                        <td width=\"560\" align=\"center\" valign=\"top\"
                                                            style=\"padding:0;Margin:0;\">
                                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                                role=\"presentation\"
                                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td align=\"center\" style=\"padding:0;Margin:0;\">
                                                                        <p
                                                                            style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:32px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:48px;color:#FFFFFF;\">
                                                                            <strong>Annuaire de l'aude</strong></p>
                                                                    </td>
                                                                </tr>
                                                                <tr style=\"border-collapse:collapse;\">
                                                                    <td align=\"center\" height=\"65\"
                                                                        style=\"padding:0;Margin:0;\"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if gte mso 9]></v:textbox></v:rect><![endif]-->
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\" bgcolor=\"transparent\"
                                style=\"padding:0;Margin:0;background-color:transparent;\">
                                <table bgcolor=\"transparent\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\"
                                            style=\"Margin:0;padding-bottom:15px;padding-top:30px;padding-left:30px;padding-right:30px;border-radius:10px 10px 0px 0px;background-color:#FFFFFF;background-position:left bottom;\"
                                            bgcolor=\"#ffffff\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"540\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left bottom;\"
                                                            role=\"presentation\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" style=\"padding:0;Margin:0;\">
                                                                    <h1
                                                                        style=\"Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#212121;\">
                                                                        Email de l'Annuaire de l'Aude</h1>
                                                                </td>
                                                            </tr>
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\"
                                                                    style=\"padding:0;Margin:0;padding-top:20px;\">
                                                                    <p
                                                                        style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#131313;\">
                                                                        <!-ici un text d'entête-></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\"
                                            style=\"Margin:0;padding-top:5px;padding-bottom:5px;padding-left:30px;padding-right:30px;border-radius:0px 0px 10px 10px;background-position:left top;background-color:#FFFFFF;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"540\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"left\" style=\"padding:0;Margin:0;\">
                                                                    <ul>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                           <label>Adresse mail de l'expéditeur : </label>

                                                                           {{contact.email}} </li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                             <label> Nom et Prénom de l'expéditeur :  </label>
                                                                             {{contact.name}}</li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label> Numéro de téléphonne de l'expéditeur : </label>
                                                                            {{contact.tel}}</li>
                                                                        <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label>Sujet du message : </label>
                                                                            {{contact.object}}</li>
                                                                            
                                                                            <li
                                                                            style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;Margin-bottom:15px;color:#131313;\">
                                                                            <label>Contenu du message : </label>
                                                                            {{contact.message}}</li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\" style=\"padding:0;Margin:0;\">
                                <table bgcolor=\"transparent\" class=\"es-content-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\" style=\"padding:0;Margin:0;background-position:left top;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"600\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" height=\"40\" bgcolor=\"transparent\"
                                                                    style=\"padding:0;Margin:0;\"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer\" align=\"center\"
                        style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#F6F6F6;background-repeat:repeat;background-position:center top;\">
                        <tr style=\"border-collapse:collapse;\">
                            <td align=\"center\"
                                style=\"padding:0;Margin:0;background-image:url(https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png);background-position:center bottom;background-repeat:repeat;\"
                                background=\"https://hbiell.stripocdn.email/content/guids/0508c389-85ad-4b87-a6a3-66d7c19e8675/images/36791587631715702.png\">
                                <table bgcolor=\"#31cb4b\" class=\"es-footer-body\" align=\"center\" cellpadding=\"0\"
                                    cellspacing=\"0\" width=\"600\"
                                    style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;\">
                                    <tr style=\"border-collapse:collapse;\">
                                        <td align=\"left\" style=\"padding:0;Margin:0;background-position:left top;\">
                                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                <tr style=\"border-collapse:collapse;\">
                                                    <td width=\"600\" align=\"center\" valign=\"top\"
                                                        style=\"padding:0;Margin:0;\">
                                                        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"
                                                            role=\"presentation\"
                                                            style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\">
                                                            <tr style=\"border-collapse:collapse;\">
                                                                <td align=\"center\" height=\"40\"
                                                                    style=\"padding:0;Margin:0;\"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>", "email/email.html.twig", "/var/www/html/PROJET_PEDA/projetannuaire/templates/email/email.html.twig");
    }
}
