@extends('admin.layout.admin_master')

<style>
    * { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* ---- grid ---- */

.grid {
  max-width: 100%px;
  background: #DDD;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 30%;
}

.grid-item {
  padding-bottom:1%; /* hack for proportional sizing */
  float: left;
  /* margin: 01px; */
  grid-gap: 1px;
  background-position: center center;
  background-size: cover;
}

.grid-item--width2 {
  width: 50%;
}

.grid-item--large {
  width: 100%;
  padding-bottom: 40%;
}

.packery-drop-placeholder {
  border: 3px dotted #333;
  background: hsla(0, 0%, 0%, 0.3);
}

.grid-item.is-dragging,
.grid-item.is-positioning-post-drag {
  z-index: 2;
}

</style>


@section('content')


 <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="3">Home</a></li>
              {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="grid">
            <div class="grid-sizer">

        </div>
        <div class="grid-item grid-item" data-item-id="1">


                <!-- View sales -->

                    <div class="card">
                        <div class="d-flex align-items-end row">
                        <div class="col-7">
                            <div class="card-body text-nowrap">
                            <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                            <p class="mb-2">Best seller of the month</p>
                            <h4 class="text-primary mb-1">$48.9k</h4>
                            <a href="javascript:;" class="btn btn-primary">View Sales</a>
                            </div>
                        </div>
                        <div class="col-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{ asset('admin/assets/img/illustrations/card-advance-sale.png')}}"
                                height="140"
                                alt="view sales" />
                            </div>
                        </div>
                        </div>



                <!-- View sales -->

            </div>
        </div>

        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;

        <div class="grid-item" data-item-id="2" >


                      <div class="card">
                        <div class="card-header pb-0">
                          <h5 class="card-title mb-0">82.5k</h5>
                          <small class="text-muted">Expenses</small>
                        </div>
                        <div class="card-body">
                          <div id="expensesChart"></div>
                          <div class="mt-md-2 text-center mt-lg-3 mt-3">
                            <small class="text-muted mt-3">$21k Expenses more than last month</small>
                          </div>
                        </div>
                      </div>


        </div>
        <div class="grid-item" data-item-id="3">


                      <div class="card">
                        <div class="card-header pb-0">
                          <h5 class="card-title mb-0">Profit</h5>
                          <small class="text-muted">Last Month</small>
                        </div>
                        <div class="card-body">
                          <div id="profitLastMonth"></div>
                          <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">624k</h4>
                            <small class="text-success">+8.24%</small>
                          </div>
                        </div>
                      </div>


        </div>

        <div class="grid-item grid-item" data-item-id="4">


                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column">
                              <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                                <small>Monthly Report</small>
                              </div>
                              <div class="chart-statistics">
                                <h3 class="card-title mb-1">4,350</h3>
                                <small class="text-success text-nowrap fw-medium"
                                  ><i class="ti ti-chevron-up me-1"></i> 15.8%</small
                                >
                              </div>
                            </div>
                            <div id="generatedLeadsChart"></div>
                          </div>
                        </div>
                      </div>
                    <!-- </div> -->
                    <!--/ Generated Leads -->

        </div>
        <div class="col-lg-12 grid-item" data-item-id="5">

             <!-- Revenue Report -->
             <div class="col-12 col-xl-8 mb-4">
                  <div class="card">
                    <div class="card-body p-0">
                      <div class="row row-bordered g-0">
                        <div class="col-md-8 position-relative p-4">
                          <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                            <h5 class="m-0 card-title">Revenue Report</h5>
                          </div>
                          <div id="totalRevenueChart" class="mt-n1"></div>
                        </div>
                        <div class="col-md-4 p-4">
                          <div class="text-center mt-4">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                type="button"
                                id="budgetId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <script>
                                  document.write(new Date().getFullYear());
                                </script>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                  <script>
                                    document.write(new Date().getFullYear() - 1);
                                  </script>
                                </a>
                                <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                  <script>
                                    document.write(new Date().getFullYear() - 2);
                                  </script>
                                </a>
                                <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                  <script>
                                    document.write(new Date().getFullYear() - 3);
                                  </script>
                                </a>
                              </div>
                            </div>
                          </div>
                          <h3 class="text-center pt-4 mb-0">$25,825</h3>
                          <p class="mb-4 text-center"><span class="fw-medium">Budget: </span>56,800</p>
                          <div class="px-3">
                            <div id="budgetChart"></div>
                          </div>
                          <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary">Increase Budget</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Revenue Report -->
        </div>

        <div class="col-lg-6 grid-item grid-item" data-item-id="6">

         <!-- Statistics -->

                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title mb-0">Statistics</h5>
                        <small class="text-muted">Updated 1 month ago</small>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2">
                              <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0">230k</h5>
                              <small>Sales</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-info me-3 p-2">
                              <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0">8.549k</h5>
                              <small>Customers</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-danger me-3 p-2">
                              <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0">1.423k</h5>
                              <small>Products</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-success me-3 p-2">
                              <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <div class="card-info">
                              <h5 class="mb-0">$9745</h5>
                              <small>Revenue</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->
                <!--/ Statistics -->


                <!-- https://app.poston.io/staging/dashboard
                viral@mailinator.com
                admin123

                https://app.poston.io/affiliate_system/index
                virala@mailinator.com
                admin123 -->

        </div>
        <div class=" col-lg-6 grid-item" data-item-id="7">
             <!-- Earning Reports -->
             <!-- <div class="col-xl-4 col-md-6 mb-4"> -->
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Earning Reports</h5>
                        <small class="text-muted">Weekly Earnings Overview</small>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="earningReports"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                          <a class="dropdown-item" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-0">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="ti ti-chart-pie-2 ti-sm"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Net Profit</h6>
                              <small class="text-muted">12.4k Sales</small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-3">
                              <small>$1,619</small>
                              <div class="d-flex align-items-center gap-1">
                                <i class="ti ti-chevron-up text-success"></i>
                                <small class="text-muted">18.6%</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"
                              ><i class="ti ti-currency-dollar ti-sm"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Total Income</h6>
                              <small class="text-muted">Sales, Affiliation</small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-3">
                              <small>$3,571</small>
                              <div class="d-flex align-items-center gap-1">
                                <i class="ti ti-chevron-up text-success"></i>
                                <small class="text-muted">39.6%</small>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-3">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="ti ti-credit-card ti-sm"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Total Expenses</h6>
                              <small class="text-muted">ADVT, Marketing</small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-3">
                              <small>$430</small>
                              <div class="d-flex align-items-center gap-1">
                                <i class="ti ti-chevron-up text-success"></i>
                                <small class="text-muted">52.8%</small>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div id="reportBarChart"></div>
                    </div>
                  </div>
                <!-- </div> -->
                <!--/ Earning Reports -->

        </div>
        <div class="grid-item" data-item-id="8">
        </div>
        <div class="grid-item" data-item-id="9">
        </div>
        </div>


        <div class="row">
          {{-- <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> --}}

          {{-- <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> --}}

          {{-- <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> --}}

          {{-- <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> --}}

        </div>
        <div class="row">
          {{-- <section class="col-lg-7 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content p-0">

                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
          {{-- <section class="col-lg-5 connectedSortable">
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>

                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>

                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                </div>
              </div>
            </div>
          </section> --}}
        </div>
      </div>
    </section>
  </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://npmcdn.com/packery@2/dist/packery.pkgd.js"></script>
    <script src="https://npmcdn.com/draggabilly@2/dist/draggabilly.pkgd.js"></script>
  <script>
    // external js: packery.pkgd.js, draggabilly.pkgd.js

// add Packery.prototype methods

// get JSON-friendly data for items positions
Packery.prototype.getShiftPositions = function( attrName ) {
  attrName = attrName || 'id';
  var _this = this;
  return this.items.map( function( item ) {
    return {
      attr: item.element.getAttribute( attrName ),
      x: item.rect.x / _this.packer.width
    }
  });
};

Packery.prototype.initShiftLayout = function( positions, attr ) {
  if ( !positions ) {
    // if no initial positions, run packery layout
    this.layout();
    return;
  }
  // parse string to JSON
  if ( typeof positions == 'string' ) {
    try {
      positions = JSON.parse( positions );
    } catch( error ) {
      console.error( 'JSON parse error: ' + error );
      this.layout();
      return;
    }
  }

  attr = attr || 'id'; // default to id attribute
  this._resetLayout();
  // set item order and horizontal position from saved positions
  this.items = positions.map( function( itemPosition ) {
    var selector = '[' + attr + '="' + itemPosition.attr  + '"]'
    var itemElem = this.element.querySelector( selector );
    var item = this.getItem( itemElem );
    item.rect.x = itemPosition.x * this.packer.width;
    return item;
  }, this );
  this.shiftLayout();
};

// -----------------------------//

// init Packery
var $grid = $('.grid').packery({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true,
  initLayout: false // disable initial layout
});

// get saved dragged positions
var initPositions = localStorage.getItem('dragPositions');
// init layout with saved positions
$grid.packery( 'initShiftLayout', initPositions, 'data-item-id' );

// make draggable
$grid.find('.grid-item').each( function( i, itemElem ) {
  var draggie = new Draggabilly( itemElem );
  $grid.packery( 'bindDraggabillyEvents', draggie );
});

// save drag positions on event
$grid.on( 'dragItemPositioned', function() {
  // save drag positions
  var positions = $grid.packery( 'getShiftPositions', 'data-item-id' );
  localStorage.setItem( 'dragPositions', JSON.stringify( positions ) );
});


</script>

  @endsection



