<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<!-- Управление Пользователями -->

{{-- <li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li> --}}

<li><a href='{{ backpack_url("cat") }}'><i class='fa fa-tag'></i> <span>Категории</span></a></li>
<li><a href='{{ backpack_url("product") }}'><i class='fa fa-tag'></i> <span>Продукты</span></a></li>
<li><a href='{{ backpack_url("carts") }}'><i class='fa fa-tag'></i> <span>Корзина</span></a></li>
<li><a href='{{ backpack_url("orders") }}'><i class='fa fa-tag'></i> <span>Заказы</span></a></li>
<li><a href='{{ backpack_url("line_items") }}'><i class='fa fa-tag'></i> <span>Позиции</span></a></li>





<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
{{-- <li><a href='/site'><i class='fa fa-tag'></i> <span>Сайт</span></a></li> --}}

<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Дополнения</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    
    {{-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li> --}}
    <li class="treeview">
      <a href="#"><i class="fa fa-group"></i> <span>Логины</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Роли</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Разрешения</span></a></li>
      </ul>
    </li>

  <li><a href='{{ backpack_url('backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
  <li><a href='{{ backpack_url('setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
  <li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}'><i class='fa fa-terminal'></i> <span>Logs</span></a></li>
    {{-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li> --}}
  </ul>
</li>