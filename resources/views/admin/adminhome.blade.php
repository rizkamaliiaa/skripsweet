@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
@section('judul','Dashboard')
     
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          	
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Admin</p>
                  <h3 class="card-title">
                  {{ $data['admin'] }}
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="{{url('adminn')}}">Lihat Data...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Users</p>
                  <h3 class="card-title">      
                  {{ $data['user'] }}             
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 
                    <a href="{{url('users')}}">Lihat Data...</a>
                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="row">
              <div class="col-md-4">
                <div class="card card-chart" data-count="4">
                  <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="263.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="49.319010416666664" x2="49.319010416666664" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="67.95703125" x2="67.95703125" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="86.59505208333333" x2="86.59505208333333" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="105.23307291666667" x2="105.23307291666667" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="123.87109375" x2="123.87109375" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="142.50911458333331" x2="142.50911458333331" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="161.14713541666666" x2="161.14713541666666" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="179.78515624999997" x2="179.78515624999997" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="198.42317708333331" x2="198.42317708333331" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="217.06119791666666" x2="217.06119791666666" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="235.69921874999997" x2="235.69921874999997" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="254.33723958333331" x2="254.33723958333331" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="18.638020833333332" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="58.63802083333333" y="125" width="18.638020833333332" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="77.27604166666666" y="125" width="18.638020833333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="95.9140625" y="125" width="18.63802083333333" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="114.55208333333333" y="125" width="18.63802083333333" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="133.19010416666666" y="125" width="18.638020833333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="151.828125" y="125" width="18.638020833333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="170.46614583333331" y="125" width="18.638020833333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="189.10416666666666" y="125" width="18.638020833333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="207.7421875" y="125" width="18.638020833333314" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="226.38020833333331" y="125" width="18.638020833333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 19px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="245.01822916666666" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Website Views</h4>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-chart" data-count="2">
                  <div class="card-header card-header-success" data-header-animation="true">
                    <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="72.66517857142857" x2="72.66517857142857" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="105.33035714285714" x2="105.33035714285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="137.99553571428572" x2="137.99553571428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="170.66071428571428" x2="170.66071428571428" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="203.32589285714283" x2="203.32589285714283" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="235.99107142857142" x2="235.99107142857142" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 91.2 C 72.665 79.2 72.665 79.2 72.665 79.2 C 105.33 103.2 105.33 103.2 105.33 103.2 C 137.996 79.2 137.996 79.2 137.996 79.2 C 170.661 64.8 170.661 64.8 170.661 64.8 C 203.326 76.8 203.326 76.8 203.326 76.8 C 235.991 28.8 235.991 28.8 235.991 28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="72.66517857142857" y1="79.2" x2="72.67517857142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="105.33035714285714" y1="103.2" x2="105.34035714285714" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="137.99553571428572" y1="79.2" x2="138.0055357142857" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="170.66071428571428" y1="64.8" x2="170.67071428571427" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="203.32589285714283" y1="76.8" x2="203.33589285714282" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="235.99107142857142" y1="28.799999999999997" x2="236.0010714285714" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="32.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="72.66517857142857" y="125" width="32.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="105.33035714285714" y="125" width="32.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="137.99553571428572" y="125" width="32.66517857142857" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="170.66071428571428" y="125" width="32.665178571428555" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="203.32589285714283" y="125" width="32.665178571428584" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="235.99107142857142" y="125" width="32.665178571428584" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Daily Sales</h4>
                    <p class="card-category">
                      <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-chart" data-count="1">
                  <div class="card-header card-header-info" data-header-animation="true">
                    <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="68.58203125" x2="68.58203125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="97.1640625" x2="97.1640625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="125.74609375" x2="125.74609375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="154.328125" x2="154.328125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="182.91015625" x2="182.91015625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="211.4921875" x2="211.4921875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="240.07421875" x2="240.07421875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="268.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 68.582 30 68.582 30 68.582 30 C 97.164 66 97.164 66 97.164 66 C 125.746 84 125.746 84 125.746 84 C 154.328 86.4 154.328 86.4 154.328 86.4 C 182.91 91.2 182.91 91.2 182.91 91.2 C 211.492 96 211.492 96 211.492 96 C 240.074 97.2 240.074 97.2 240.074 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="68.58203125" y1="30" x2="68.59203125" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="97.1640625" y1="66" x2="97.1740625" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="125.74609375" y1="84" x2="125.75609375" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="154.328125" y1="86.4" x2="154.338125" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="182.91015625" y1="91.2" x2="182.92015625" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="211.4921875" y1="96" x2="211.5021875" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="240.07421875" y1="97.2" x2="240.08421875" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="68.58203125" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="97.1640625" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="125.74609375" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="154.328125" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="182.91015625" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="211.4921875" y="125" width="28.58203125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 29px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="240.07421875" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Completed Tasks</h4>
                    <p class="card-category">Last Campaign Performance</p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4">
                <div class="card card-product" data-count="5">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/card-2.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit" aria-describedby="tooltip276858">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Cozy 5 Stars Apartment</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$899/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product" data-count="11">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/card-3.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit" aria-describedby="tooltip478113">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" aria-describedby="tooltip900675">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Office Studio</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$1.119/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-product" data-count="8">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#pablo">
                      <img class="img" src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/card-1.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View" aria-describedby="tooltip842934">
                        <i class="material-icons">art_track</i>
                      </button>
                      <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" aria-describedby="tooltip607549">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <h4 class="card-title">
                      <a href="#pablo">Beautiful Castle</a>
                    </h4>
                    <div class="card-description">
                      The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>$459/night</h4>
                    </div>
                    <div class="stats">
                      <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      @endsection