@extends ('layouts.app_admin')


@section('content')

    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Панель Управления @endslot
            @slot('parent') Главная @endslot
            @slot('active')  @endslot

        @endcomponent
    </section>



    <!-- Main content-->
    <section class="content">
        <div class="row">
        <!-- Small boxes (Stat Box) -->
        <div class="col-lg-3 cpl-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h4>Кол-во заказов:{{$countOrders}}</h4>
                    <p>Заказы</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
            <!-- ./col -->
            <div class="col-lg-3 cpl-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h4>Кол-во продуктов: {{$countProducts}}</h4>
                        <p>Товары</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 cpl-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h4>Кол-во юзеров: {{$countUsers}}</h4>
                        <p>Регистрация пользователей</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 cpl-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h4>Кол-во категорий: {{$countCategories}}</h4>
                        <p>Категории</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="col-md-6">
            @include('blog.admin.main.include.orders')
            @include('blog.admin.main.include.recently')
        </div>



    </section>
  <!-- /. content -->

@endsection
