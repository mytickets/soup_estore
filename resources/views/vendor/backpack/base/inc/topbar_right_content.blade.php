<!-- This file is used to store topbar (right) items -->

{{-- <li class="">
    <a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">
        <i class="fa fa-cog"></i> Заказы
    </a>
</li> --}}

<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        <span class="label label-success">1</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">1 заказ в очереди</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- start message -->
                    <a href="#">
                        <div class="pull-left">
                            <img src="https://gravatar.com/avatar" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            Заказ №1
                            <small><i class="fa fa-clock-o"></i> 5 мин</small>
                        </h4>
                        <p>Оливье</p>
                        <p>4 стол</p>
                        <p>1 место</p>
                    </a>
                </li>
                <!-- end message -->
            </ul>
        </li>
        <li class="footer"><a href="#">Все заказы</a></li>
    </ul>
</li>
