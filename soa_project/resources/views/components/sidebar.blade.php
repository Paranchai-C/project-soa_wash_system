<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="">Wash system</a>
        </div>
    </div>
    <ul class="sidebar-nav">

        <li class="sidebar-item">
            <a href="{{route('wel')}}" class="sidebar-link">
                <i class="lni lni-home"></i>

                <span>หน้าหลัก</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('order')}}" class="sidebar-link">
                <i class="lni lni-protection"></i>
                <span>ใช้บริการ</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('status')}}" class="sidebar-link">
                <i class="lni lni-layout"></i>

                <span>ประวัติ</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="{{route('login')}}" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>ออกจากระบบ</span>
        </a>
    </div>
</aside>