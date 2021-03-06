<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* NBAdminBundle::layout.html.twig */
class __TwigTemplate_df500a7fa72960700a45d918386ec4a14e10053383fca5312322bb9f020b4326 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/mystik/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 14:01:08 GMT -->
<head>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Iconic Fonts -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iconic-fonts/font-awesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iconic-fonts/flat-icons/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iconic-fonts/cryptocoins/cryptocoins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- jQuery UI -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Mystic styles -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon.ico\">

</head>

<body class=\"ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar\">

<!-- Setting Panel -->
<div class=\"ms-toggler ms-settings-toggle ms-d-block-lg\">
    <i class=\"flaticon-paint\"></i>
</div>
<div class=\"ms-settings-panel ms-d-block-lg\">
    <div class=\"row\">

        <div class=\"col-xl-4 col-md-4\">
            <h4 class=\"section-title\">Customize</h4>
            <div>
                <label class=\"ms-switch\">
                    <input type=\"checkbox\" id=\"dark-mode\">
                    <span class=\"ms-switch-slider round\"></span>
                </label>
                <span> Dark Mode </span>
            </div>
            <div>
                <label class=\"ms-switch\">
                    <input type=\"checkbox\" id=\"remove-quickbar\">
                    <span class=\"ms-switch-slider round\"></span>
                </label>
                <span> Remove Quickbar </span>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4\">
            <h4 class=\"section-title\">Keyboard Shortcuts</h4>
            <p class=\"ms-directions mb-0\"><code>Esc</code> Close Quick Bar</p>
            <p class=\"ms-directions mb-0\"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
            <p class=\"ms-directions mb-0\"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

        </div>


    </div>
</div>

<!-- Preloader -->
<div id=\"preloader-wrap\">
    <div class=\"spinner spinner-8\">
        <div class=\"ms-circle1 ms-child\"></div>
        <div class=\"ms-circle2 ms-child\"></div>
        <div class=\"ms-circle3 ms-child\"></div>
        <div class=\"ms-circle4 ms-child\"></div>
        <div class=\"ms-circle5 ms-child\"></div>
        <div class=\"ms-circle6 ms-child\"></div>
        <div class=\"ms-circle7 ms-child\"></div>
        <div class=\"ms-circle8 ms-child\"></div>
        <div class=\"ms-circle9 ms-child\"></div>
        <div class=\"ms-circle10 ms-child\"></div>
        <div class=\"ms-circle11 ms-child\"></div>
        <div class=\"ms-circle12 ms-child\"></div>
    </div>
</div>

<!-- Overlays -->
<div class=\"ms-aside-overlay ms-overlay-left ms-toggler\" data-target=\"#ms-side-nav\" data-toggle=\"slideLeft\"></div>
<div class=\"ms-aside-overlay ms-overlay-right ms-toggler\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"></div>

<!-- Sidebar Navigation Left -->
<aside id=\"ms-side-nav\" class=\"side-nav fixed ms-aside-scrollable ms-aside-left\">

    <!-- Logo -->
    <div class=\"logo-sn ms-d-block-lg\">
        <a class=\"pl-0 ml-0 text-center\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_admin_homepage");
        echo "\"> <img src=\"assets/img/logo.png\" alt=\"logo\"> </a>
    </div>

    <!-- Navigation -->
    <ul class=\"accordion ms-main-aside fs-14\" id=\"side-nav-accordion\">
        <!-- Dashboard -->
        <li class=\"menu-item\">
            <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_admin_homepage");
        echo "\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Tableau de bord </span>
            </a>

        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agent_index");
        echo "\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Agent Immobilier </span>
            </a>

        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien_index");
        echo "\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Bien Immobilier </span>
            </a>

        </li>
        <!-- /Dashboard -->

    </ul>


</aside>

<!-- Sidebar Right -->
<aside id=\"ms-recent-activity\" class=\"side-nav fixed ms-aside-right ms-scrollable\">

    <div class=\"ms-aside-header\">
        <ul class=\"nav nav-tabs tabs-bordered d-flex nav-justified mb-3\" role=\"tablist\">
            <li role=\"presentation\" class=\"fs-12\"><a href=\"#activityLog\" aria-controls=\"activityLog\" class=\"active\" role=\"tab\" data-toggle=\"tab\"> Activity Log</a></li>
            <li role=\"presentation\" class=\"fs-12\"><a href=\"#recentPosts\" aria-controls=\"recentPosts\" role=\"tab\" data-toggle=\"tab\"> Settings </a></li>
            <li><button type=\"button\" class=\"close ms-toggler text-center\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"><span aria-hidden=\"true\">&times;</span></button></li>
        </ul>
    </div>

    <div class=\"ms-aside-body\">

        <div class=\"tab-content\">

            <div role=\"tabpanel\" class=\"tab-pane active fade show\" id=\"activityLog\">
                <ul class=\"ms-activity-log\">
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-light\">
                            <i class=\"flaticon-gear\"></i>
                        </div>
                        <h6>Update 1.0.0 Pushed</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-success\">
                            <i class=\"flaticon-tick-inside-circle\"></i>
                        </div>
                        <h6>Profile Updated</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-warning\">
                            <i class=\"flaticon-alert-1\"></i>
                        </div>
                        <h6>Your payment is due</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-danger\">
                            <i class=\"flaticon-alert\"></i>
                        </div>
                        <h6>Database Error</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-info\">
                            <i class=\"flaticon-information\"></i>
                        </div>
                        <h6>Checkout what's Trending</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-secondary\">
                            <i class=\"flaticon-diamond\"></i>
                        </div>
                        <h6>Your Dashboard is ready</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                </ul>
                <a href=\"#\" class=\"btn btn-primary d-block\"> View All </a>
            </div>

            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"recentPosts\">

                <h6>General Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Location Tracking</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Allow Notifications</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Allow Popups</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <h6>Log Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Enable Logging</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Audit Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Error Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <h6>Advanced Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Enable Logging</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Audit Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Error Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>

            </div>

        </div>

    </div>

</aside>

<!-- Main Content -->
<main class=\"body-content\">

    <!-- Navigation Bar -->
    <nav class=\"navbar ms-navbar\">

        <div class=\"ms-aside-toggler ms-toggler pl-0\" data-target=\"#ms-side-nav\" data-toggle=\"slideLeft\">
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
        </div>

        <div class=\"logo-sn logo-sm ms-d-block-sm\">
            <a class=\"pl-0 ml-0 text-center navbar-brand mr-0\" href=\"index.html\"><img src=\"assets/img/logo-sm-dark.png\" alt=\"logo\"> </a>
        </div>

        <ul class=\"ms-nav-list ms-inline mb-0\" id=\"ms-nav-options\">
            <li class=\"ms-nav-item ms-search-form pb-0 py-0\">
                <form class=\"ms-form\" method=\"post\">
                    <div class=\"ms-form-group my-0 mb-0 has-icon fs-14\">
                        <input type=\"search\" class=\"ms-form-input\" name=\"search\" placeholder=\"Search here...\" value=\"\">
                        <i class=\"flaticon-search text-disabled\"></i>
                    </div>
                </form>
            </li>
            <li class=\"ms-nav-item dropdown\">
                <a href=\"#\" class=\"text-disabled ms-has-notification\" id=\"mailDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flaticon-mail\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"mailDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Mail</span></h6><span class=\"badge badge-pill badge-success\">3 New</span>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-scrollable ms-dropdown-list\">
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-5.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>Hey man, looking forward to your new project.</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 30 seconds ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-9.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>Dear John, I was told you bought Mystic! Send me your feedback</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 28 minutes ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-3.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>How many people are we inviting to the dashboard?</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 6 hours ago</p>
                            </div>
                        </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer text-center\">
                        <a href=\"apps/email.html\">Go to Inbox</a>
                    </li>
                </ul>
            </li>
            <li class=\"ms-nav-item dropdown\">
                <a href=\"#\" class=\"text-disabled ms-has-notification\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flaticon-bell\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"notificationDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Notifications</span></h6><span class=\"badge badge-pill badge-info\">4 New</span>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-scrollable ms-dropdown-list\">
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>12 ways to improve your crypto dashboard</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 30 seconds ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>You have newly registered users</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 45 minutes ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>Your account was logged in from an unauthorized IP</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 2 hours ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>An application form has been submitted</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 1 day ago</p>
                            </div>
                        </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer text-center\">
                        <a href=\"#\">View all Notifications</a>
                    </li>
                </ul>
            </li>
            <li class=\"ms-nav-item\">
                <a href=\"#\" class=\"text-disabled ms-toggler\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"><i class=\"flaticon-menu\"></i></a>
            </li>
            <li class=\"ms-nav-item ms-nav-user dropdown\">
                <a href=\"#\"  id=\"userDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img class=\"ms-user-img ms-img-round float-right\" src=\"assets/img/people/people-5.jpg\" alt=\"people\"> </a>
                <ul class=\"dropdown-menu dropdown-menu-right user-dropdown\" aria-labelledby=\"userDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Welcome, Anny Farisha</span></h6>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-dropdown-list\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/user-profile.html\"> <span><i class=\"flaticon-user mr-2\"></i> Profile</span> </a>
                        <a class=\"media fs-14 p-2\" href=\"pages/apps/email.html\"> <span><i class=\"flaticon-mail mr-2\"></i> Inbox</span> <span class=\"badge badge-pill badge-info\">3</span> </a>
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/user-profile.html\"> <span><i class=\"flaticon-gear mr-2\"></i> Account Settings</span> </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/lock-screen.html\"> <span><i class=\"flaticon-security mr-2\"></i> Lock</span> </a>
                    </li>
                    <li class=\"dropdown-menu-footer\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/default-login.html\"> <span><i class=\"flaticon-shut-down mr-2\"></i> Logout</span> </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"ms-toggler ms-d-block-sm pr-0 ms-nav-toggler\" data-toggle=\"slideDown\" data-target=\"#ms-nav-options\">
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
        </div>

    </nav>


    <!-- Body Content Wrapper -->
    <div class=\"ms-content-wrapper\">
        <div class=\"row\">

            ";
        // line 418
        $this->displayBlock('content', $context, $blocks);
        // line 419
        echo "
        </div>
    </div>

</main>

<!-- Quick bar -->
<aside id=\"ms-quick-bar\" class=\"ms-quick-bar fixed ms-d-block-lg\">



</aside>

<!-- MODALS -->

<!-- Reminder Modal -->
<div class=\"modal fade\" id=\"reminder-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"reminder-modal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header bg-secondary\">
                <h5 class=\"modal-title has-icon text-white\"> New Reminder</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>

            <form>

                <div class=\"modal-body\">

                    <div class=\"ms-form-group\">
                        <label>Remind me about</label>
                        <textarea class=\"form-control\" name=\"reminder\"></textarea>
                    </div>

                    <div class=\"ms-form-group\">
                        <span class=\"ms-option-name fs-14\">Repeat Daily</span>
                        <label class=\"ms-switch float-right\">
                            <input type=\"checkbox\">
                            <span class=\"ms-switch-slider round\"></span>
                        </label>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"ms-form-group\">
                                <input type=\"text\" class=\"form-control datepicker\" name=\"reminder-date\" value=\"\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"ms-form-group\">
                                <select class=\"form-control\" name=\"reminder-time\">
                                    <option value=\"\">12:00 pm</option>
                                    <option value=\"\">1:00 pm</option>
                                    <option value=\"\">2:00 pm</option>
                                    <option value=\"\">3:00 pm</option>
                                    <option value=\"\">4:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-secondary shadow-none\" data-dismiss=\"modal\">Add Reminder</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Notes Modal -->
<div class=\"modal fade\" id=\"notes-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"notes-modal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header bg-secondary\">
                <h5 class=\"modal-title has-icon text-white\" id=\"NoteModal\">New Note</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>

            <form>

                <div class=\"modal-body\">

                    <div class=\"ms-form-group\">
                        <label>Note Title</label>
                        <input type=\"text\" class=\"form-control\" name=\"note-title\" value=\"\">
                    </div>

                    <div class=\"ms-form-group\">
                        <label>Note Description</label>
                        <textarea class=\"form-control\" name=\"note-description\"></textarea>
                    </div>

                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-secondary shadow-none\" data-dismiss=\"modal\">Add Note</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/perfect-scrollbar.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/slick.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/moment.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.webticker.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/Chart.bundle.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/Chart.Financial.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cryptocurrency.js"), "html", null, true);
        echo "\"> </script>
<!-- Page Specific Scripts Finish -->

<!-- Mystic core JavaScript -->
<script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/framework.js"), "html", null, true);
        echo "\"></script>

<!-- Settings -->
<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/settings.js"), "html", null, true);
        echo "\"></script>

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/mystik/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 14:01:32 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 418
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NBAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 418,  687 => 11,  669 => 552,  663 => 549,  656 => 545,  652 => 544,  648 => 543,  644 => 542,  640 => 541,  636 => 540,  629 => 536,  625 => 535,  621 => 534,  617 => 533,  613 => 532,  498 => 419,  496 => 418,  190 => 115,  181 => 109,  172 => 103,  162 => 96,  88 => 25,  83 => 23,  78 => 21,  73 => 19,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/mystik/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 14:01:08 GMT -->
<head>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %} {% endblock %}</title>
    <!-- Iconic Fonts -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendors/iconic-fonts/font-awesome/css/all.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- jQuery UI -->
    <link href=\"{{ asset('assets/css/jquery-ui.min.css') }}\" rel=\"stylesheet\">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href=\"{{ asset('assets/css/slick.css') }}\" rel=\"stylesheet\">
    <!-- Mystic styles -->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon.ico\">

</head>

<body class=\"ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar\">

<!-- Setting Panel -->
<div class=\"ms-toggler ms-settings-toggle ms-d-block-lg\">
    <i class=\"flaticon-paint\"></i>
</div>
<div class=\"ms-settings-panel ms-d-block-lg\">
    <div class=\"row\">

        <div class=\"col-xl-4 col-md-4\">
            <h4 class=\"section-title\">Customize</h4>
            <div>
                <label class=\"ms-switch\">
                    <input type=\"checkbox\" id=\"dark-mode\">
                    <span class=\"ms-switch-slider round\"></span>
                </label>
                <span> Dark Mode </span>
            </div>
            <div>
                <label class=\"ms-switch\">
                    <input type=\"checkbox\" id=\"remove-quickbar\">
                    <span class=\"ms-switch-slider round\"></span>
                </label>
                <span> Remove Quickbar </span>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4\">
            <h4 class=\"section-title\">Keyboard Shortcuts</h4>
            <p class=\"ms-directions mb-0\"><code>Esc</code> Close Quick Bar</p>
            <p class=\"ms-directions mb-0\"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
            <p class=\"ms-directions mb-0\"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

        </div>


    </div>
</div>

<!-- Preloader -->
<div id=\"preloader-wrap\">
    <div class=\"spinner spinner-8\">
        <div class=\"ms-circle1 ms-child\"></div>
        <div class=\"ms-circle2 ms-child\"></div>
        <div class=\"ms-circle3 ms-child\"></div>
        <div class=\"ms-circle4 ms-child\"></div>
        <div class=\"ms-circle5 ms-child\"></div>
        <div class=\"ms-circle6 ms-child\"></div>
        <div class=\"ms-circle7 ms-child\"></div>
        <div class=\"ms-circle8 ms-child\"></div>
        <div class=\"ms-circle9 ms-child\"></div>
        <div class=\"ms-circle10 ms-child\"></div>
        <div class=\"ms-circle11 ms-child\"></div>
        <div class=\"ms-circle12 ms-child\"></div>
    </div>
</div>

<!-- Overlays -->
<div class=\"ms-aside-overlay ms-overlay-left ms-toggler\" data-target=\"#ms-side-nav\" data-toggle=\"slideLeft\"></div>
<div class=\"ms-aside-overlay ms-overlay-right ms-toggler\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"></div>

<!-- Sidebar Navigation Left -->
<aside id=\"ms-side-nav\" class=\"side-nav fixed ms-aside-scrollable ms-aside-left\">

    <!-- Logo -->
    <div class=\"logo-sn ms-d-block-lg\">
        <a class=\"pl-0 ml-0 text-center\" href=\"{{ path('nb_admin_homepage') }}\"> <img src=\"assets/img/logo.png\" alt=\"logo\"> </a>
    </div>

    <!-- Navigation -->
    <ul class=\"accordion ms-main-aside fs-14\" id=\"side-nav-accordion\">
        <!-- Dashboard -->
        <li class=\"menu-item\">
            <a href=\"{{ path('nb_admin_homepage') }}\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Tableau de bord </span>
            </a>

        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('admin_agent_index') }}\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Agent Immobilier </span>
            </a>

        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('admin_bien_index') }}\" class=\"\">
                <span><i class=\"material-icons fs-16\">dashboard</i>Bien Immobilier </span>
            </a>

        </li>
        <!-- /Dashboard -->

    </ul>


</aside>

<!-- Sidebar Right -->
<aside id=\"ms-recent-activity\" class=\"side-nav fixed ms-aside-right ms-scrollable\">

    <div class=\"ms-aside-header\">
        <ul class=\"nav nav-tabs tabs-bordered d-flex nav-justified mb-3\" role=\"tablist\">
            <li role=\"presentation\" class=\"fs-12\"><a href=\"#activityLog\" aria-controls=\"activityLog\" class=\"active\" role=\"tab\" data-toggle=\"tab\"> Activity Log</a></li>
            <li role=\"presentation\" class=\"fs-12\"><a href=\"#recentPosts\" aria-controls=\"recentPosts\" role=\"tab\" data-toggle=\"tab\"> Settings </a></li>
            <li><button type=\"button\" class=\"close ms-toggler text-center\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"><span aria-hidden=\"true\">&times;</span></button></li>
        </ul>
    </div>

    <div class=\"ms-aside-body\">

        <div class=\"tab-content\">

            <div role=\"tabpanel\" class=\"tab-pane active fade show\" id=\"activityLog\">
                <ul class=\"ms-activity-log\">
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-light\">
                            <i class=\"flaticon-gear\"></i>
                        </div>
                        <h6>Update 1.0.0 Pushed</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-success\">
                            <i class=\"flaticon-tick-inside-circle\"></i>
                        </div>
                        <h6>Profile Updated</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-warning\">
                            <i class=\"flaticon-alert-1\"></i>
                        </div>
                        <h6>Your payment is due</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-danger\">
                            <i class=\"flaticon-alert\"></i>
                        </div>
                        <h6>Database Error</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-info\">
                            <i class=\"flaticon-information\"></i>
                        </div>
                        <h6>Checkout what's Trending</h6>
                        <span> <i class=\"material-icons\">event</i>1 January, 2020</span>
                        <p class=\"fs-14\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class=\"ms-btn-icon btn-pill icon btn-secondary\">
                            <i class=\"flaticon-diamond\"></i>
                        </div>
                        <h6>Your Dashboard is ready</h6>
                        <span> <i class=\"material-icons\">event</i>4 March, 2018</span>
                        <p class=\"fs-14\">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                </ul>
                <a href=\"#\" class=\"btn btn-primary d-block\"> View All </a>
            </div>

            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"recentPosts\">

                <h6>General Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Location Tracking</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Allow Notifications</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Allow Popups</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <h6>Log Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Enable Logging</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Audit Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Error Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <h6>Advanced Settings</h6>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Enable Logging</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Audit Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\">
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>
                <div class=\"ms-form-group\">
                    <span class=\"ms-option-name fs-14\">Error Logs</span>
                    <label class=\"ms-switch float-right\">
                        <input type=\"checkbox\" checked>
                        <span class=\"ms-switch-slider round\"></span>
                    </label>
                </div>

            </div>

        </div>

    </div>

</aside>

<!-- Main Content -->
<main class=\"body-content\">

    <!-- Navigation Bar -->
    <nav class=\"navbar ms-navbar\">

        <div class=\"ms-aside-toggler ms-toggler pl-0\" data-target=\"#ms-side-nav\" data-toggle=\"slideLeft\">
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
        </div>

        <div class=\"logo-sn logo-sm ms-d-block-sm\">
            <a class=\"pl-0 ml-0 text-center navbar-brand mr-0\" href=\"index.html\"><img src=\"assets/img/logo-sm-dark.png\" alt=\"logo\"> </a>
        </div>

        <ul class=\"ms-nav-list ms-inline mb-0\" id=\"ms-nav-options\">
            <li class=\"ms-nav-item ms-search-form pb-0 py-0\">
                <form class=\"ms-form\" method=\"post\">
                    <div class=\"ms-form-group my-0 mb-0 has-icon fs-14\">
                        <input type=\"search\" class=\"ms-form-input\" name=\"search\" placeholder=\"Search here...\" value=\"\">
                        <i class=\"flaticon-search text-disabled\"></i>
                    </div>
                </form>
            </li>
            <li class=\"ms-nav-item dropdown\">
                <a href=\"#\" class=\"text-disabled ms-has-notification\" id=\"mailDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flaticon-mail\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"mailDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Mail</span></h6><span class=\"badge badge-pill badge-success\">3 New</span>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-scrollable ms-dropdown-list\">
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-5.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>Hey man, looking forward to your new project.</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 30 seconds ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-9.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>Dear John, I was told you bought Mystic! Send me your feedback</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 28 minutes ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center\">
                                <img src=\"assets/img/people/people-3.jpg\" class=\"ms-img-round\" alt=\"people\">
                            </div>
                            <div class=\"media-body\">
                                <span>How many people are we inviting to the dashboard?</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 6 hours ago</p>
                            </div>
                        </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer text-center\">
                        <a href=\"apps/email.html\">Go to Inbox</a>
                    </li>
                </ul>
            </li>
            <li class=\"ms-nav-item dropdown\">
                <a href=\"#\" class=\"text-disabled ms-has-notification\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flaticon-bell\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"notificationDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Notifications</span></h6><span class=\"badge badge-pill badge-info\">4 New</span>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-scrollable ms-dropdown-list\">
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>12 ways to improve your crypto dashboard</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 30 seconds ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>You have newly registered users</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 45 minutes ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>Your account was logged in from an unauthorized IP</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 2 hours ago</p>
                            </div>
                        </a>
                        <a class=\"media p-2\" href=\"#\">
                            <div class=\"media-body\">
                                <span>An application form has been submitted</span>
                                <p class=\"fs-10 my-1 text-disabled\"><i class=\"material-icons\">access_time</i> 1 day ago</p>
                            </div>
                        </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer text-center\">
                        <a href=\"#\">View all Notifications</a>
                    </li>
                </ul>
            </li>
            <li class=\"ms-nav-item\">
                <a href=\"#\" class=\"text-disabled ms-toggler\" data-target=\"#ms-recent-activity\" data-toggle=\"slideRight\"><i class=\"flaticon-menu\"></i></a>
            </li>
            <li class=\"ms-nav-item ms-nav-user dropdown\">
                <a href=\"#\"  id=\"userDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img class=\"ms-user-img ms-img-round float-right\" src=\"assets/img/people/people-5.jpg\" alt=\"people\"> </a>
                <ul class=\"dropdown-menu dropdown-menu-right user-dropdown\" aria-labelledby=\"userDropdown\">
                    <li class=\"dropdown-menu-header\">
                        <h6 class=\"dropdown-header ms-inline m-0\"><span class=\"text-disabled\">Welcome, Anny Farisha</span></h6>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"ms-dropdown-list\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/user-profile.html\"> <span><i class=\"flaticon-user mr-2\"></i> Profile</span> </a>
                        <a class=\"media fs-14 p-2\" href=\"pages/apps/email.html\"> <span><i class=\"flaticon-mail mr-2\"></i> Inbox</span> <span class=\"badge badge-pill badge-info\">3</span> </a>
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/user-profile.html\"> <span><i class=\"flaticon-gear mr-2\"></i> Account Settings</span> </a>
                    </li>
                    <li class=\"dropdown-divider\"></li>
                    <li class=\"dropdown-menu-footer\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/lock-screen.html\"> <span><i class=\"flaticon-security mr-2\"></i> Lock</span> </a>
                    </li>
                    <li class=\"dropdown-menu-footer\">
                        <a class=\"media fs-14 p-2\" href=\"pages/prebuilt-pages/default-login.html\"> <span><i class=\"flaticon-shut-down mr-2\"></i> Logout</span> </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class=\"ms-toggler ms-d-block-sm pr-0 ms-nav-toggler\" data-toggle=\"slideDown\" data-target=\"#ms-nav-options\">
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
            <span class=\"ms-toggler-bar bg-primary\"></span>
        </div>

    </nav>


    <!-- Body Content Wrapper -->
    <div class=\"ms-content-wrapper\">
        <div class=\"row\">

            {% block content %} {% endblock %}

        </div>
    </div>

</main>

<!-- Quick bar -->
<aside id=\"ms-quick-bar\" class=\"ms-quick-bar fixed ms-d-block-lg\">



</aside>

<!-- MODALS -->

<!-- Reminder Modal -->
<div class=\"modal fade\" id=\"reminder-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"reminder-modal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header bg-secondary\">
                <h5 class=\"modal-title has-icon text-white\"> New Reminder</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>

            <form>

                <div class=\"modal-body\">

                    <div class=\"ms-form-group\">
                        <label>Remind me about</label>
                        <textarea class=\"form-control\" name=\"reminder\"></textarea>
                    </div>

                    <div class=\"ms-form-group\">
                        <span class=\"ms-option-name fs-14\">Repeat Daily</span>
                        <label class=\"ms-switch float-right\">
                            <input type=\"checkbox\">
                            <span class=\"ms-switch-slider round\"></span>
                        </label>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"ms-form-group\">
                                <input type=\"text\" class=\"form-control datepicker\" name=\"reminder-date\" value=\"\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"ms-form-group\">
                                <select class=\"form-control\" name=\"reminder-time\">
                                    <option value=\"\">12:00 pm</option>
                                    <option value=\"\">1:00 pm</option>
                                    <option value=\"\">2:00 pm</option>
                                    <option value=\"\">3:00 pm</option>
                                    <option value=\"\">4:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-secondary shadow-none\" data-dismiss=\"modal\">Add Reminder</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Notes Modal -->
<div class=\"modal fade\" id=\"notes-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"notes-modal\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header bg-secondary\">
                <h5 class=\"modal-title has-icon text-white\" id=\"NoteModal\">New Note</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>

            <form>

                <div class=\"modal-body\">

                    <div class=\"ms-form-group\">
                        <label>Note Title</label>
                        <input type=\"text\" class=\"form-control\" name=\"note-title\" value=\"\">
                    </div>

                    <div class=\"ms-form-group\">
                        <label>Note Description</label>
                        <textarea class=\"form-control\" name=\"note-description\"></textarea>
                    </div>

                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-secondary shadow-none\" data-dismiss=\"modal\">Add Note</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src=\"{{ asset('assets/js/jquery-3.5.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/perfect-scrollbar.js') }}\"> </script>
<script src=\"{{ asset('assets/js/jquery-ui.min.js') }}\"> </script>
<!-- Global Required Scripts End -->

<!-- Page Specific Scripts Start -->
<script src=\"{{ asset('assets/js/slick.min.js') }}\"> </script>
<script src=\"{{ asset('assets/js/moment.js') }}\"> </script>
<script src=\"{{ asset('assets/js/jquery.webticker.min.js') }}\"> </script>
<script src=\"{{ asset('assets/js/Chart.bundle.min.js') }}\"> </script>
<script src=\"{{ asset('assets/js/Chart.Financial.js') }}\"> </script>
<script src=\"{{ asset('assets/js/cryptocurrency.js') }}\"> </script>
<!-- Page Specific Scripts Finish -->

<!-- Mystic core JavaScript -->
<script src=\"{{ asset('assets/js/framework.js') }}\"></script>

<!-- Settings -->
<script src=\"{{ asset('assets/js/settings.js') }}\"></script>

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/mystik/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2021 14:01:32 GMT -->
</html>
", "NBAdminBundle::layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/louanse/src/NB/AdminBundle/Resources/views/layout.html.twig");
    }
}
