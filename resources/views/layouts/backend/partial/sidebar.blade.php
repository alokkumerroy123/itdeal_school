
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand-icon">
        <img src="img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3"><span class="small">School Management</span></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{Route::currentRouteName() == 'backend.dashboard' ? 'active' : 0}}">
      <a class="nav-link" href="{{ route('backend.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>{{ __('sidebar.dashboard') }}</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      {{ __('sidebar.features') }}
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#academic-menu" aria-expanded="true"
          aria-controls="academic-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.academic') }}</span>
        </a>
        <div id="academic-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if(userHasPermission('session-store'))
            <a class="collapse-item " href="">{{ __('sidebar.create-session') }}</a>
            @endif

            @if(userHasPermission('section-store'))
            <a class="collapse-item " href="">{{ __('sidebar.create-section') }}</a>
            @endif

            @if(userHasPermission('group-store'))
            <a class="collapse-item " href="">{{ __('sidebar.create-group') }}</a>
            @endif

            @if(userHasPermission('class-store'))
            <a class="collapse-item " href="">{{ __('sidebar.create-class') }}</a>
            @endif

            @if(userHasPermission('room-store'))
            <a class="collapse-item " href="">{{ __('sidebar.class-room') }}</a>
            @endif

            @if(userHasPermission('routin-store'))
            <a class="collapse-item " href="">{{ __('sidebar.create-routine') }}</a>
            @endif

          </div>
        </div>
    </li>

    @if(userHasPermission('subject-module'))
    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#subject-menu" aria-expanded="true"
          aria-controls="subject-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.subject') }}</span>
        </a>
        <div id="subject-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if(userHasPermission('subject-store'))
                <a class="collapse-item " href="">{{ __('sidebar.create-subject') }}</a>
                <a class="collapse-item " href="">{{ __('sidebar.assign-to-student') }}</a>
                <a class="collapse-item " href="">{{ __('sidebar.assign-to-teacher') }}</a>
            @endif

          </div>
        </div>
    </li>
    @endif

    @if(userHasPermission('student-module'))
    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#student-menu" aria-expanded="true"
          aria-controls="student-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.student') }}</span>
        </a>
        <div id="student-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if(userHasPermission('student-store'))
            <a class="collapse-item " href="">{{ __('sidebar.add-student') }}</a>
            @endif

            @if(userHasPermission('student-index'))
            <a class="collapse-item " href="">{{ __('sidebar.student-list') }}</a>
            @endif

            @if(userHasPermission('student-advance'))
                <a class="collapse-item " href="">{{ __('sidebar.disable-student') }}</a>
                <a class="collapse-item " href="">{{ __('sidebar.promote-student') }}</a>
                <a class="collapse-item " href="">{{ __('sidebar.report') }}</a>
                <a class="collapse-item " href="">{{ __('sidebar.id-card-generate') }}</a>
            @endif

          </div>
        </div>
    </li>
    @endif

    @if(userHasPermission('attendance-module'))
    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#attendance-menu" aria-expanded="true"
          aria-controls="attendance-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.attendance') }}</span>
        </a>
        <div id="attendance-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if(userHasPermission('attendance-store'))
            <a class="collapse-item " href="">{{ __('sidebar.manually-attendance') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.device-synchronic') }}</a>
            @endif
          </div>
        </div>
    </li>
    @endif


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#homework-menu" aria-expanded="true"
          aria-controls="homework-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.homework') }}</span>
        </a>
        <div id="homework-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.add-homework') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.homework-evaluation') }}</a>
          </div>
        </div>
    </li>

    @if(userHasPermission('examination-module'))
    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#exam-menu" aria-expanded="true"
          aria-controls="exam-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.examination') }}</span>
        </a>
        <div id="exam-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if(userHasPermission('examination-advance'))
            <a class="collapse-item " href="">{{ __('sidebar.marks-grade') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.create-exam') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.setting') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.seat-plan') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.admit-card') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.blank-mark-sheet') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.input-mark') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.view-mark') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.view-result') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.tabulation-sheet') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.mark-sheet') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.merit-list') }}</a>
            @endif
          </div>
        </div>
    </li>
    @endif


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#fees-menu" aria-expanded="true"
          aria-controls="fees-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.fees') }}</span>
        </a>
        <div id="fees-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.fees-group') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.fees-type') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.fees-waiver') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.fees-collection') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.payment-search') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.report') }}</a>
          </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#accounting-menu" aria-expanded="true"
          aria-controls="accounting-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.accounting') }}</span>
        </a>
        <div id="accounting-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.cashbook') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.bank') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.expense') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.income') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.report') }}</a>
          </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#hrm-menu" aria-expanded="true"
          aria-controls="hrm-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.hrm') }}</span>
        </a>
        <div id="hrm-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.designation') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.department') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.stuff') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.stuff-attendance') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.payroll') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.report') }}</a>
          </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#sms-menu" aria-expanded="true"
          aria-controls="sms-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.sms') }}</span>
        </a>
        <div id="sms-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.result-sms') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.bulk-sms') }}</a>
          </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#communication-menu" aria-expanded="true"
          aria-controls="communication-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.communication') }}</span>
        </a>
        <div id="communication-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.notice-board') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.email') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.event') }}</a>
          </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#inventory-menu" aria-expanded="true"
          aria-controls="inventory-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.inventory') }}</span>
        </a>
        <div id="inventory-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.item-category') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.item-list') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.item-purchase') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.supplier-customer') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.item-sell') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.report') }}</a>
          </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#library-menu" aria-expanded="true"
          aria-controls="library-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.library') }}</span>
        </a>
        <div id="library-menu" class="collapse " aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="">{{ __('sidebar.category') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.books') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.member') }}</a>
            <a class="collapse-item " href="">{{ __('issue/return') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.all-issues') }}</a>
          </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" active href="#" data-toggle="collapse" data-target="#setting-menu" aria-expanded="true"
          aria-controls="setting-menu">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>{{ __('sidebar.setting') }}</span>
        </a>
        <div id="setting-menu" class="collapse {{Request::is('backend/setting*')?'show':''}}" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item  {{Route::currentRouteName() == 'backend.role.create' ? 'active' : 0}}" href="{{ route('backend.role.create') }}">{{ __('sidebar.role-permission') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.branch') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.general-setting') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.user-list') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.payment-method') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.sms-api') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.backup') }}</a>
            <a class="collapse-item " href="">{{ __('sidebar.template-setting') }}</a>
        </div>
        </div>
    </li>







  </ul>
