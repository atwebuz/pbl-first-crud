@extends('layouts.layout')

@section('section__content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Account Settings</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active"> Account Settings
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- account setting page start -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                    General
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="feather icon-lock mr-50 font-medium-3"></i>
                                    Change Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i class="feather icon-info mr-50 font-medium-3"></i>
                                    Info
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i class="feather icon-camera mr-50 font-medium-3"></i>
                                    Social links
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections" aria-expanded="false">
                                    <i class="feather icon-feather mr-50 font-medium-3"></i>
                                    Connections
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                    <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                                    Notifications
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            <div class="media">
                                                <a href="javascript: void(0);">
                                                    <img src="{{asset('assets/images/portrait/small/avatar-s-12.jpg')}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                </a>
                                                <div class="media-body mt-75">
                                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="account-upload">Upload new photo</label>
                                                        <input type="file" id="account-upload" hidden="">
                                                        <button class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Reset</button>
                                                    </div>
                                                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                            size of
                                                            800kB</small></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Username</label>
                                                                <input type="text" class="form-control" id="account-username" placeholder="Username" value="hermione007" required="" data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-name">Name</label>
                                                                <input type="text" class="form-control" id="account-name" placeholder="Name" value="Hermione Granger" required="" data-validation-required-message="This name field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-e-mail">E-mail</label>
                                                                <input type="email" class="form-control" id="account-e-mail" placeholder="Email" value="granger007@hogward.com" required="" data-validation-required-message="This email field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <p class="mb-0">
                                                                Your email is not confirmed. Please check your inbox.
                                                            </p>
                                                            <a href="javascript: void(0);">Resend confirmation</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-company">Company</label>
                                                            <input type="text" class="form-control" id="account-company" placeholder="Company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-old-password">Old Password</label>
                                                                <input type="password" class="form-control" id="account-old-password" required="" placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-new-password">New Password</label>
                                                                <input type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password" required="" data-validation-required-message="The password field is required" minlength="6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-retype-new-password">Retype New
                                                                    Password</label>
                                                                <input type="password" name="con-password" class="form-control" required="" id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                            <form novalidate="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="accountTextarea">Bio</label>
                                                            <textarea class="form-control" id="accountTextarea" rows="3" placeholder="Your Bio data here..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-birth-date">Birth date</label>
                                                                <input type="text" class="form-control birthdate-picker picker__input" required="" placeholder="Birth date" id="account-birth-date" data-validation-required-message="This birthdate field is required" readonly="" aria-haspopup="true" aria-readonly="false" aria-owns="account-birth-date_root"><div class="picker" id="account-birth-date_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">April</div><div class="picker__year">2023</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Next month"> </div></div><table class="picker__table" id="account-birth-date_table" role="grid" aria-controls="account-birth-date" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1679770800000" id="account-birth-date_1679770800000" tabindex="0" role="gridcell" aria-label="March, 26, 2023">26</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1679857200000" id="account-birth-date_1679857200000" tabindex="0" role="gridcell" aria-label="March, 27, 2023">27</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1679943600000" id="account-birth-date_1679943600000" tabindex="0" role="gridcell" aria-label="March, 28, 2023">28</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1680030000000" id="account-birth-date_1680030000000" tabindex="0" role="gridcell" aria-label="March, 29, 2023">29</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1680116400000" id="account-birth-date_1680116400000" tabindex="0" role="gridcell" aria-label="March, 30, 2023">30</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1680202800000" id="account-birth-date_1680202800000" tabindex="0" role="gridcell" aria-label="March, 31, 2023">31</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680289200000" id="account-birth-date_1680289200000" tabindex="0" role="gridcell" aria-label="April, 1, 2023">1</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1680375600000" id="account-birth-date_1680375600000" tabindex="0" role="gridcell" aria-label="April, 2, 2023">2</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680462000000" id="account-birth-date_1680462000000" tabindex="0" role="gridcell" aria-label="April, 3, 2023">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680548400000" id="account-birth-date_1680548400000" tabindex="0" role="gridcell" aria-label="April, 4, 2023">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680634800000" id="account-birth-date_1680634800000" tabindex="0" role="gridcell" aria-label="April, 5, 2023">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680721200000" id="account-birth-date_1680721200000" tabindex="0" role="gridcell" aria-label="April, 6, 2023">6</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680807600000" id="account-birth-date_1680807600000" tabindex="0" role="gridcell" aria-label="April, 7, 2023">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1680894000000" id="account-birth-date_1680894000000" tabindex="0" role="gridcell" aria-label="April, 8, 2023">8</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1680980400000" id="account-birth-date_1680980400000" tabindex="0" role="gridcell" aria-label="April, 9, 2023">9</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681066800000" id="account-birth-date_1681066800000" tabindex="0" role="gridcell" aria-label="April, 10, 2023">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681153200000" id="account-birth-date_1681153200000" tabindex="0" role="gridcell" aria-label="April, 11, 2023">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681239600000" id="account-birth-date_1681239600000" tabindex="0" role="gridcell" aria-label="April, 12, 2023">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681326000000" id="account-birth-date_1681326000000" tabindex="0" role="gridcell" aria-label="April, 13, 2023">13</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681412400000" id="account-birth-date_1681412400000" tabindex="0" role="gridcell" aria-label="April, 14, 2023">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681498800000" id="account-birth-date_1681498800000" tabindex="0" role="gridcell" aria-label="April, 15, 2023">15</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1681585200000" id="account-birth-date_1681585200000" tabindex="0" role="gridcell" aria-label="April, 16, 2023">16</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681671600000" id="account-birth-date_1681671600000" tabindex="0" role="gridcell" aria-label="April, 17, 2023">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681758000000" id="account-birth-date_1681758000000" tabindex="0" role="gridcell" aria-label="April, 18, 2023">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681844400000" id="account-birth-date_1681844400000" tabindex="0" role="gridcell" aria-label="April, 19, 2023">19</div></td><td><div class="picker__day picker__day--infocus" data-pick="1681930800000" id="account-birth-date_1681930800000" tabindex="0" role="gridcell" aria-label="April, 20, 2023">20</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682017200000" id="account-birth-date_1682017200000" tabindex="0" role="gridcell" aria-label="April, 21, 2023">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682103600000" id="account-birth-date_1682103600000" tabindex="0" role="gridcell" aria-label="April, 22, 2023">22</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1682190000000" id="account-birth-date_1682190000000" tabindex="0" role="gridcell" aria-label="April, 23, 2023">23</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682276400000" id="account-birth-date_1682276400000" tabindex="0" role="gridcell" aria-label="April, 24, 2023">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682362800000" id="account-birth-date_1682362800000" tabindex="0" role="gridcell" aria-label="April, 25, 2023">25</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682449200000" id="account-birth-date_1682449200000" tabindex="0" role="gridcell" aria-label="April, 26, 2023">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682535600000" id="account-birth-date_1682535600000" tabindex="0" role="gridcell" aria-label="April, 27, 2023">27</div></td><td><div class="picker__day picker__day--infocus" data-pick="1682622000000" id="account-birth-date_1682622000000" tabindex="0" role="gridcell" aria-label="April, 28, 2023">28</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1682708400000" id="account-birth-date_1682708400000" tabindex="0" role="gridcell" aria-label="April, 29, 2023" aria-activedescendant="1682708400000">29</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1682794800000" id="account-birth-date_1682794800000" tabindex="0" role="gridcell" aria-label="April, 30, 2023">30</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1682881200000" id="account-birth-date_1682881200000" tabindex="0" role="gridcell" aria-label="May, 1, 2023">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1682967600000" id="account-birth-date_1682967600000" tabindex="0" role="gridcell" aria-label="May, 2, 2023">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1683054000000" id="account-birth-date_1683054000000" tabindex="0" role="gridcell" aria-label="May, 3, 2023">3</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1683140400000" id="account-birth-date_1683140400000" tabindex="0" role="gridcell" aria-label="May, 4, 2023">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1683226800000" id="account-birth-date_1683226800000" tabindex="0" role="gridcell" aria-label="May, 5, 2023">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1683313200000" id="account-birth-date_1683313200000" tabindex="0" role="gridcell" aria-label="May, 6, 2023">6</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1682708400000" disabled="" aria-controls="account-birth-date">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="account-birth-date">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="account-birth-date">Close</button></div></div></div></div></div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="accountSelect">Country</label>
                                                            <select class="form-control" id="accountSelect">
                                                                <option>USA</option>
                                                                <option>India</option>
                                                                <option>Canada</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="languageselect2">Languages</label>
                                                            <select class="form-control select2-hidden-accessible" id="languageselect2" multiple="" data-select2-id="languageselect2" tabindex="-1" aria-hidden="true">
                                                                <option value="English" selected="" data-select2-id="2">English</option>
                                                                <option value="Spanish">Spanish</option>
                                                                <option value="French">French</option>
                                                                <option value="Russian">Russian</option>
                                                                <option value="German">German</option>
                                                                <option value="Arabic" selected="" data-select2-id="3">Arabic</option>
                                                                <option value="Sanskrit">Sanskrit</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="4"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-selection__choice" title="Arabic" data-select2-id="5"><span class="select2-selection__choice__remove" role="presentation">×</span>Arabic</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-phone">Phone</label>
                                                                <input type="text" class="form-control" id="account-phone" required="" placeholder="Phone number" value="(+656) 254 2568" data-validation-required-message="This phone number field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-website">Website</label>
                                                            <input type="text" class="form-control" id="account-website" placeholder="Website address">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="musicselect2">Favourite Music</label>
                                                            <select class="form-control select2-hidden-accessible" id="musicselect2" multiple="" data-select2-id="musicselect2" tabindex="-1" aria-hidden="true">
                                                                <option value="Rock">Rock</option>
                                                                <option value="Jazz" selected="" data-select2-id="7">Jazz</option>
                                                                <option value="Disco">Disco</option>
                                                                <option value="Pop">Pop</option>
                                                                <option value="Techno">Techno</option>
                                                                <option value="Folk" selected="" data-select2-id="8">Folk</option>
                                                                <option value="Hip hop">Hip hop</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Jazz" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>Jazz</li><li class="select2-selection__choice" title="Folk" data-select2-id="10"><span class="select2-selection__choice__remove" role="presentation">×</span>Folk</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="moviesselect2">Favourite movies</label>
                                                            <select class="form-control select2-hidden-accessible" id="moviesselect2" multiple="" data-select2-id="moviesselect2" tabindex="-1" aria-hidden="true">
                                                                <option value="The Dark Knight" selected="" data-select2-id="12">The Dark Knight
                                                                </option>
                                                                <option value="Harry Potter" selected="" data-select2-id="13">Harry Potter</option>
                                                                <option value="Airplane!">Airplane!</option>
                                                                <option value="Perl Harbour">Perl Harbour</option>
                                                                <option value="Spider Man">Spider Man</option>
                                                                <option value="Iron Man" selected="" data-select2-id="14">Iron Man</option>
                                                                <option value="Avatar">Avatar</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="The Dark Knight
                                                                " data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>The Dark Knight
                                                                </li><li class="select2-selection__choice" title="Harry Potter" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>Harry Potter</li><li class="select2-selection__choice" title="Iron Man" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Iron Man</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade " id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                            <form>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-twitter">Twitter</label>
                                                            <input type="text" id="account-twitter" class="form-control" placeholder="Add link" value="https://www.twitter.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-facebook">Facebook</label>
                                                            <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-google">Google+</label>
                                                            <input type="text" id="account-google" class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-linkedin">LinkedIn</label>
                                                            <input type="text" id="account-linkedin" class="form-control" placeholder="Add link" value="https://www.linkedin.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-instagram">Instagram</label>
                                                            <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="account-quora">Quora</label>
                                                            <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                            changes</button>
                                                        <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <a href="javascript: void(0);" class="btn btn-info waves-effect waves-light">Connect to
                                                        <strong>Twitter</strong></a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <button class=" btn btn-sm btn-secondary float-right waves-effect waves-light">edit</button>
                                                    <h6>You are connected to facebook.</h6>
                                                    <span>Johndoe@gmail.com</span>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="javascript: void(0);" class="btn btn-danger waves-effect waves-light">Connect to
                                                        <strong>Google</strong>
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <button class=" btn btn-sm btn-secondary float-right waves-effect waves-light">edit</button>
                                                    <h6>You are connected to Instagram.</h6>
                                                    <span>Johndoe@gmail.com</span>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                            <div class="row">
                                                <h6 class="m-1">Activity</h6>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch1">
                                                        <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                                        <span class="switch-label w-100">Email me when someone comments
                                                            onmy
                                                            article</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch2">
                                                        <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                                        <span class="switch-label w-100">Email me when someone answers on
                                                            my
                                                            form</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                                        <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                                        <span class="switch-label w-100">Email me hen someone follows
                                                            me</span>
                                                    </div>
                                                </div>
                                                <h6 class="m-1">Application</h6>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch4">
                                                        <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                                        <span class="switch-label w-100">News and announcements</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                                        <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                                        <span class="switch-label w-100">Weekly product updates</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-1">
                                                    <div class="custom-control custom-switch custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input" checked="" id="accountSwitch6">
                                                        <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                                        <span class="switch-label w-100">Weekly blog digest</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-outline-warning waves-effect waves-light">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- account setting page end -->

        </div>
    </div>
</div>

@endsection