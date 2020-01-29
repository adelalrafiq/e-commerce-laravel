@extends('trucksmarkt.layouts.master')
@section('content')

<body>


    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>

                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree"
                                id="list-group-men" data-children=".sub-men">
                                @foreach($categories as $cat)
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#{{$cat->id}}"
                                        data-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-men1">{{$cat->name}}
                                        <small class="text-muted"></small>
                                    </a>
                                    <div class="collapse show" id="{{$cat->id}}" data-parent="#list-group-men">
                                        <div class="list-group">
                                            @foreach($cat->categories as $key=>$subcat)
                                            <a href="{{url('/categories/'.$subcat->id)}}"
                                                class="list-group-item list-group-item-action active">{{$subcat->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">


                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <h1 align="center">{{$product_name->name}}</h1>
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="{{asset('/uploads/products/'.$product->image)}}"
                                                        class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Compare"><i class="fas fa-sync-alt"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Add to Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                        <a class="cart" href="{{url('/products/'.$product->id)}}">Detail
                                                            Page</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>{{$product->description}}</h4>
                                                    <h5>{{$product->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
    <form id="form-dsp" name="dsp" method="POST" action="https://suchen.mobile.de/fahrzeuge/preSearch">
        <input type="hidden" name="isSearchRequest" value="true"/>
        <input type="hidden" name="scopeId" value="STT"/>
        <div class="g-row">
            <div class="g-col-12">
                <article class="cBox cBox--sticky cBox--sticky-grey u-show u-overflow-inherit">
                    <section class="cBox-body">
                        <div class="g-row sticky-bar">
                            <div class="u-pull-left sticky-header">
                                <h1 class="h2 u-pad-top-9">Detailed Search: Semi-Trailer Trucks – new or used</h1>
                            </div>
                            <div class="u-margin-right-9 u-text-right u-pull-right">
                                <button id="dsp-upper-search-btn" class="dsp-search-btn btn btn--l btn--orange" type="submit">
                                    <i class="gicon-search-s icon--s"></i>
                                    <span class="hit-counter" data-unformatted="21601">21,601</span>
                                    results
                                </button>
                            </div>
                        </div>
                    </section>
                </article>
                <div class="cBox--sticky-spacer"></div>
            </div>
        </div>
        <div class="g-row">
            <div class="g-col-12">
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Condition</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="usage-NEW-ds" name="usage" type="checkbox" value="NEW">
                                    <label for="usage-NEW-ds">New</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="usage-USED-ds" name="usage" type="checkbox" value="USED">
                                    <label for="usage-USED-ds">Used</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="cBox-make-model-wrapper" data-unselectedtext="Any">
                    <div class="cBox cBox--content u-overflow-inherit">
                        <div class="cBox-body">
                            <div class="g-row">
                                <div class="g-col-12">
                                    <h4 class="h3">Category, make, model</h4>
                                </div>
                            </div>
                            <hr/>
                            <div class="g-row">
                                <div class="g-col-3">
                                    <label for="category-ds">Category</label>
                                </div>
                            </div>
                            <div class="g-row">
                                <div class="g-col-3">
                                    <select id="category-ds" class="form-control form-control--dropdown" name="category" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="HazardousLoad">Hazardous load</option>
                                        <option value="HeavyLoad">Heavy load</option>
                                        <option value="StandardTractorAndTrailerUnit">Standard tractor/trailer unit</option>
                                        <option value="VolumeTrailer">Volume trailer</option>
                                        <option value="OtherSemiTrailerTruck">Other semi-trailer trucks</option>
                                    </select>
                                </div>
                            </div>
                            <div class="g-row u-pad-top-18">
                                <div class="g-col-3">
                                    <label for="selectMake1-ds">Make</label>
                                </div>
                                <div class="g-col-3">
                                    <label for="modelDescription1-ds">Model:</label>
                                </div>
                            </div>
                            <div class="g-row mmh-row-incl">
                                <div class="g-col-3">
                                    <div class="form-group">
                                        <select id="selectMake1-ds" class="form-control form-control--dropdown mmh-make-incl" name="makeModelVariant1.makeId"></select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="form-group">
                                        <input type="text" id="modelDescription1-ds" class="mmh-model-desc form-control" name="makeModelVariant1.modelDescription" pattern="^[0-9A-Za-zÀ-ÿ]+[-,.0-9A-Za-zÀ-ÿ ]*" maxlength="48" title="Please only enter letters and numbers." placeholder="e.g. FH 12, ACTROS 1846, TGA 410 ...">
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="mmh-del mmh-del-incl">
                                        <i class="gicon-btn-delete icon--l"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="g-row">
                                <div class="g-col-12">
                                    <a class="link--muted mmh-add-row-button mmh-add-incl">
                                        <i class="gicon-btn-add-b icon--l icon--grey-80"></i>
                                        Add other vehicles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Vehicle search</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <div class="g-col-6">
                                <div class="g-row">
                                    <fieldset>
                                        <div class="g-col-12">
                                            <legend>First registration (date)</legend>
                                        </div>
                                        <div class="g-col-6">
                                            <div id="minFirstRegistrationDateContainer" class="form-group--combobox ab-normalcombo-container">
                                                <input id="minFirstRegistrationDate" name="minFirstRegistrationDate" class="form-control" placeholder="from" autocomplete="off">
                                                <select id="minFirstRegistrationDate-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                                    <option value="">Any</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1900">1900</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="g-col-6">
                                            <div id="maxFirstRegistrationDateContainer" class="form-group--combobox ab-normalcombo-container">
                                                <input id="maxFirstRegistrationDate" name="maxFirstRegistrationDate" class="form-control" placeholder="to" autocomplete="off">
                                                <select id="maxFirstRegistrationDate-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                                    <option value="">Any</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1900">1900</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="g-col-6">
                                <div class="g-row">
                                    <fieldset>
                                        <div class="g-col-12">
                                            <legend>Kilometer</legend>
                                        </div>
                                        <div class="g-col-6">
                                            <div id="minMileageContainer" class="form-group--combobox ab-normalcombo-container">
                                                <input id="minMileage" name="minMileage" class="form-control" placeholder="from" autocomplete="off">
                                                <select id="minMileage-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                                    <option value="">Any</option>
                                                    <option value="10000">10,000 km</option>
                                                    <option value="20000">20,000 km</option>
                                                    <option value="30000">30,000 km</option>
                                                    <option value="40000">40,000 km</option>
                                                    <option value="50000">50,000 km</option>
                                                    <option value="60000">60,000 km</option>
                                                    <option value="70000">70,000 km</option>
                                                    <option value="80000">80,000 km</option>
                                                    <option value="90000">90,000 km</option>
                                                    <option value="100000">100,000 km</option>
                                                    <option value="125000">125,000 km</option>
                                                    <option value="150000">150,000 km</option>
                                                    <option value="300000">300,000 km</option>
                                                    <option value="400000">400,000 km</option>
                                                    <option value="500000">500,000 km</option>
                                                    <option value="600000">600,000 km</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="g-col-6">
                                            <div id="maxMileageContainer" class="form-group--combobox ab-normalcombo-container">
                                                <input id="maxMileage" name="maxMileage" class="form-control" placeholder="to" autocomplete="off">
                                                <select id="maxMileage-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                                    <option value="">Any</option>
                                                    <option value="10000">10,000 km</option>
                                                    <option value="20000">20,000 km</option>
                                                    <option value="30000">30,000 km</option>
                                                    <option value="40000">40,000 km</option>
                                                    <option value="50000">50,000 km</option>
                                                    <option value="60000">60,000 km</option>
                                                    <option value="70000">70,000 km</option>
                                                    <option value="80000">80,000 km</option>
                                                    <option value="90000">90,000 km</option>
                                                    <option value="100000">100,000 km</option>
                                                    <option value="125000">125,000 km</option>
                                                    <option value="150000">150,000 km</option>
                                                    <option value="300000">300,000 km</option>
                                                    <option value="400000">400,000 km</option>
                                                    <option value="500000">500,000 km</option>
                                                    <option value="600000">600,000 km</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="g-row">
                            <div class="g-col-9">
                                <legend>Price</legend>
                            </div>
                            <div class="g-col-3">
                                <legend>VAT.</legend>
                            </div>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-3">
                                    <div id="minPriceContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="minPrice" name="minPrice" class="form-control" placeholder="from" autocomplete="off">
                                        <select id="minPrice-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="500">500 €</option>
                                            <option value="1000">1,000 €</option>
                                            <option value="1500">1,500 €</option>
                                            <option value="2000">2,000 €</option>
                                            <option value="2500">2,500 €</option>
                                            <option value="3000">3,000 €</option>
                                            <option value="3500">3,500 €</option>
                                            <option value="4000">4,000 €</option>
                                            <option value="4500">4,500 €</option>
                                            <option value="5000">5,000 €</option>
                                            <option value="6000">6,000 €</option>
                                            <option value="7000">7,000 €</option>
                                            <option value="8000">8,000 €</option>
                                            <option value="9000">9,000 €</option>
                                            <option value="10000">10,000 €</option>
                                            <option value="11000">11,000 €</option>
                                            <option value="12000">12,000 €</option>
                                            <option value="13000">13,000 €</option>
                                            <option value="14000">14,000 €</option>
                                            <option value="15000">15,000 €</option>
                                            <option value="17500">17,500 €</option>
                                            <option value="20000">20,000 €</option>
                                            <option value="22500">22,500 €</option>
                                            <option value="25000">25,000 €</option>
                                            <option value="27500">27,500 €</option>
                                            <option value="30000">30,000 €</option>
                                            <option value="35000">35,000 €</option>
                                            <option value="40000">40,000 €</option>
                                            <option value="45000">45,000 €</option>
                                            <option value="50000">50,000 €</option>
                                            <option value="55000">55,000 €</option>
                                            <option value="60000">60,000 €</option>
                                            <option value="70000">70,000 €</option>
                                            <option value="80000">80,000 €</option>
                                            <option value="90000">90,000 €</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div id="maxPriceContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="maxPrice" name="maxPrice" class="form-control" placeholder="to" autocomplete="off">
                                        <select id="maxPrice-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="500">500 €</option>
                                            <option value="1000">1,000 €</option>
                                            <option value="1500">1,500 €</option>
                                            <option value="2000">2,000 €</option>
                                            <option value="2500">2,500 €</option>
                                            <option value="3000">3,000 €</option>
                                            <option value="3500">3,500 €</option>
                                            <option value="4000">4,000 €</option>
                                            <option value="4500">4,500 €</option>
                                            <option value="5000">5,000 €</option>
                                            <option value="6000">6,000 €</option>
                                            <option value="7000">7,000 €</option>
                                            <option value="8000">8,000 €</option>
                                            <option value="9000">9,000 €</option>
                                            <option value="10000">10,000 €</option>
                                            <option value="11000">11,000 €</option>
                                            <option value="12000">12,000 €</option>
                                            <option value="13000">13,000 €</option>
                                            <option value="14000">14,000 €</option>
                                            <option value="15000">15,000 €</option>
                                            <option value="17500">17,500 €</option>
                                            <option value="20000">20,000 €</option>
                                            <option value="22500">22,500 €</option>
                                            <option value="25000">25,000 €</option>
                                            <option value="27500">27,500 €</option>
                                            <option value="30000">30,000 €</option>
                                            <option value="35000">35,000 €</option>
                                            <option value="40000">40,000 €</option>
                                            <option value="45000">45,000 €</option>
                                            <option value="50000">50,000 €</option>
                                            <option value="55000">55,000 €</option>
                                            <option value="60000">60,000 €</option>
                                            <option value="70000">70,000 €</option>
                                            <option value="80000">80,000 €</option>
                                            <option value="90000">90,000 €</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="g-row">
                                        <div class="g-col-6">
                                            <div class="radio">
                                                <input id="grossPrice-true-ds" name="grossPrice" type="radio" value="true">
                                                <label for="grossPrice-true-ds">Gross</label>
                                            </div>
                                        </div>
                                        <div class="g-col-6">
                                            <div class="radio">
                                                <input id="grossPrice-false-ds" name="grossPrice" type="radio" value="false" checked data-default="true">
                                                <label for="grossPrice-false-ds">Net</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <select id="vatable-ds" class="form-control form-control--dropdown" name="vatable" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="true">VAT reclaimable</option>
                                        <option value="false">VAT not reclaimable</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset id="power-ds" class="u-no-pad-bottom">
                                <div class="g-col-12">
                                    <legend>Power</legend>
                                </div>
                                <div class="g-col-3">
                                    <div id="minPowerAsArrayContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="minPowerAsArray" name="minPowerAsArray" class="form-control" placeholder="from" autocomplete="off">
                                        <select id="minPowerAsArray-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="44">44 kW</option>
                                            <option value="55">55 kW</option>
                                            <option value="66">66 kW</option>
                                            <option value="74">74 kW</option>
                                            <option value="96">96 kW</option>
                                            <option value="118">118 kW</option>
                                            <option value="162">162 kW</option>
                                            <option value="235">235 kW</option>
                                            <option value="279">279 kW</option>
                                            <option value="309">309 kW</option>
                                            <option value="350">350 kW</option>
                                            <option value="410">410 kW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div id="maxPowerAsArrayContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="maxPowerAsArray" name="maxPowerAsArray" class="form-control" placeholder="to" autocomplete="off">
                                        <select id="maxPowerAsArray-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="43">43 kW</option>
                                            <option value="54">54 kW</option>
                                            <option value="65">65 kW</option>
                                            <option value="73">73 kW</option>
                                            <option value="95">95 kW</option>
                                            <option value="117">117 kW</option>
                                            <option value="161">161 kW</option>
                                            <option value="234">234 kW</option>
                                            <option value="278">278 kW</option>
                                            <option value="308">308 kW</option>
                                            <option value="349">349 kW</option>
                                            <option value="409">409 kW</option>
                                        </select>
                                    </div>
                                    <input id="maxPowerAsArray-unit" type="hidden" name="maxPowerAsArray" value="KW">
                                </div>
                                <div class="g-col-3">
                                    <div class="g-row power-radio">
                                        <div class="g-col-6">
                                            <div class="radio">
                                                <input id="power-unit-ps" type="radio" name="minPowerAsArray" value="PS" data-label="PS">
                                                <label for="power-unit-ps">PS</label>
                                            </div>
                                        </div>
                                        <div class="g-col-6">
                                            <div class="radio">
                                                <input id="power-unit-kw" type="radio" name="minPowerAsArray" value="KW" data-label="kW" checked>
                                                <label for="power-unit-kw">kW</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Engine</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <fieldset class="clear-float">
                                <legend class="g-col-12">Fuel Type</legend>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-PETROL-ds" name="fuels" type="checkbox" value="PETROL">
                                        <label for="fuels-PETROL-ds">Petrol</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-DIESEL-ds" name="fuels" type="checkbox" value="DIESEL">
                                        <label for="fuels-DIESEL-ds">Diesel</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-ELECTRICITY-ds" name="fuels" type="checkbox" value="ELECTRICITY">
                                        <label for="fuels-ELECTRICITY-ds">Electric</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-HYBRID-ds" name="fuels" type="checkbox" value="HYBRID">
                                        <label for="fuels-HYBRID-ds">Hybrid (petrol/electric)</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-HYBRID_DIESEL-ds" name="fuels" type="checkbox" value="HYBRID_DIESEL">
                                        <label for="fuels-HYBRID_DIESEL-ds">Hybrid (diesel / electric)</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-LPG-ds" name="fuels" type="checkbox" value="LPG">
                                        <label for="fuels-LPG-ds">LPG</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-CNG-ds" name="fuels" type="checkbox" value="CNG">
                                        <label for="fuels-CNG-ds">Natural Gas</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-HYDROGENIUM-ds" name="fuels" type="checkbox" value="HYDROGENIUM">
                                        <label for="fuels-HYDROGENIUM-ds">Hydrogen</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="fuels-OTHER-ds" name="fuels" type="checkbox" value="OTHER">
                                        <label for="fuels-OTHER-ds">Other</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-12">
                                    <legend>Transmission</legend>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="transmissions-MANUAL_GEAR-ds" name="transmissions" type="checkbox" value="MANUAL_GEAR">
                                        <label for="transmissions-MANUAL_GEAR-ds">Manual gearbox</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="transmissions-SEMIAUTOMATIC_GEAR-ds" name="transmissions" type="checkbox" value="SEMIAUTOMATIC_GEAR">
                                        <label for="transmissions-SEMIAUTOMATIC_GEAR-ds">Semi-automatic</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="transmissions-AUTOMATIC_GEAR-ds" name="transmissions" type="checkbox" value="AUTOMATIC_GEAR">
                                        <label for="transmissions-AUTOMATIC_GEAR-ds">Automatic transmission</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Location</h4>
                            </div>
                        </div>
                        <hr/>
                        <div id="ambitSearch-container" data-defaultcountryname="Germany" data-handlefocuslostonlocation="true" data-language="en" data-unselectedtext="Any" data-visitorinfo="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjaWQiOiI3MDY3ODFkOS0zZWE0LTRmODgtYjIzNC1iZjgyNjg1Y2FiZWQiLCJhdWQiOltdLCJpYXQiOjE1NzU5NzQxNjl9.WWRxsiHgeBdTd0yRFyS5dhEvPyrGU_rKe8FkbA1aLU8" data-zipcodelabel="Zip">
                            <input type="hidden" name="gn" disabled="true">
                            <input type="hidden" name="ll" disabled="true">
                            <input type="hidden" name="rd" disabled="true">
                            <div class="ambitSearch-panel g-row">
                                <div class="g-col-3">
                                    <label class="ambitSearch-country-label" for="ambit-search-country">Country</label>
                                    <select name="cn" id="ambit-search-country" class="ambitSearch-country form-control form-control--dropdown"></select>
                                </div>
                                <div class="ambitSearch-location-width g-col-3">
                                    <!-- location field -->
                                    <label class="ambitSearch-location-label" for="ambit-search-location">Enter location or postal code</label>
                                    <input type="text" id="ambit-search-location" class="ambitSearch-location form-control awesomplete" disabled="true" title="Enter location or postal code">
                                </div>
                                <div class="g-col-3">
                                    <label class="ambitSearch-radius-label inactive" for="ambit-search-radius">Radius to centre</label>
                                    <div class="ambitSearch-radiusContainer form-group--combobox" data-km="km">
                                        <input class="ambitSearch-radius form-control" id="ambit-search-radius" disabled="true" placeholder="None" type="tel" autocomplete="off">
                                        <select class="ambitSearch-radiusSelector form-control form-control--combobox ab-normalcombo-variant" disabled="true">
                                            <option value="10">10 km</option>
                                            <option value="20">20 km</option>
                                            <option value="50">50 km</option>
                                            <option value="100">100 km</option>
                                            <option value="200">200 km</option>
                                            <option value="500">500 km</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content cBox--equipment u-overflow-inherit">
                    <div id="features" class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Features</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-ALLOY_WHEELS-ds" name="features" type="checkbox" value="ALLOY_WHEELS">
                                        <label for="features-ALLOY_WHEELS-ds">Alloy wheels</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-COMPRESSOR-ds" name="features" type="checkbox" value="COMPRESSOR">
                                        <label for="features-COMPRESSOR-ds">Compressor</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-FULL_FAIRING-ds" name="features" type="checkbox" value="FULL_FAIRING">
                                        <label for="features-FULL_FAIRING-ds">Full Fairing</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset class="clear-float">
                                <legend class="g-col-12">Air conditioning</legend>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="climatisation--ds" name="climatisation" type="radio" value="" checked data-default="true">
                                        <label for="climatisation--ds">Any</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="climatisation-NO_CLIMATISATION-ds" name="climatisation" type="radio" value="NO_CLIMATISATION">
                                        <label for="climatisation-NO_CLIMATISATION-ds">No climatisation</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="climatisation-MANUAL_OR_AUTOMATIC_CLIMATISATION-ds" name="climatisation" type="radio" value="MANUAL_OR_AUTOMATIC_CLIMATISATION">
                                        <label for="climatisation-MANUAL_OR_AUTOMATIC_CLIMATISATION-ds">Manual or automatic climatisation</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="climatisation-AUTOMATIC_CLIMATISATION-ds" name="climatisation" type="radio" value="AUTOMATIC_CLIMATISATION">
                                        <label for="climatisation-AUTOMATIC_CLIMATISATION-ds">Automatic air conditioning</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset class="clear-float">
                                <legend class="g-col-12">Axles</legend>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="axles--ds" name="axles" type="radio" value="" checked data-default="true">
                                        <label for="axles--ds">Any</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="axles-TWO-ds" name="axles" type="radio" value="TWO">
                                        <label for="axles-TWO-ds">2</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="axles-THREE-ds" name="axles" type="radio" value="THREE">
                                        <label for="axles-THREE-ds">3</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="axles-MORE_THAN_THREE-ds" name="axles" type="radio" value="MORE_THAN_THREE">
                                        <label for="axles-MORE_THAN_THREE-ds">More than 3</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-12">
                                    <legend>Wheel Formula</legend>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_4x2-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_4x2">
                                        <label for="wheelFormula-WHEEL_DRIVE_4x2-ds">4x2</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_4x4-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_4x4">
                                        <label for="wheelFormula-WHEEL_DRIVE_4x4-ds">4x4</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_6x2-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_6x2">
                                        <label for="wheelFormula-WHEEL_DRIVE_6x2-ds">6x2</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_6x4-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_6x4">
                                        <label for="wheelFormula-WHEEL_DRIVE_6x4-ds">6x4</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_6x6-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_6x6">
                                        <label for="wheelFormula-WHEEL_DRIVE_6x6-ds">6x6</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_8x4-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_8x4">
                                        <label for="wheelFormula-WHEEL_DRIVE_8x4-ds">8x4</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_8x6-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_8x6">
                                        <label for="wheelFormula-WHEEL_DRIVE_8x6-ds">8x6</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="wheelFormula-WHEEL_DRIVE_8x8-ds" name="wheelFormula" type="checkbox" value="WHEEL_DRIVE_8x8">
                                        <label for="wheelFormula-WHEEL_DRIVE_8x8-ds">8x8</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <div class="g-col-6">
                                <legend>Permissible Gross Vehicle Weight (GVW)</legend>
                            </div>
                            <div class="g-col-3">
                                <legend>Cruise control</legend>
                            </div>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-3">
                                    <div id="minLicensedWeightContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="minLicensedWeight" name="minLicensedWeight" class="form-control" placeholder="from" autocomplete="off">
                                        <select id="minLicensedWeight-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="1000">1,000 kg</option>
                                            <option value="1500">1,500 kg</option>
                                            <option value="3500">3,500 kg</option>
                                            <option value="5000">5,000 kg</option>
                                            <option value="7000">7,000 kg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div id="maxLicensedWeightContainer" class="form-group--combobox ab-normalcombo-container">
                                        <input id="maxLicensedWeight" name="maxLicensedWeight" class="form-control" placeholder="to" autocomplete="off">
                                        <select id="maxLicensedWeight-s" class="form-control form-control--combobox ab-normalcombo-variant" data-default-index=&#45;1>
                                            <option value="">Any</option>
                                            <option value="1000">1,000 kg</option>
                                            <option value="1500">1,500 kg</option>
                                            <option value="3000">3,000 kg</option>
                                            <option value="5000">5,000 kg</option>
                                            <option value="7000">7,000 kg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <select id="spc-ds" class="form-control form-control--dropdown" name="spc" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="CRUISE_CONTROL">Cruise control</option>
                                        <option value="ADAPTIVE_CRUISE_CONTROL">Adaptive Cruise Control</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <div class="g-col-3">
                                <legend>Hydraulic Installation</legend>
                            </div>
                            <div class="g-col-3">
                                <legend>Driving Cab</legend>
                            </div>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-3">
                                    <select id="hydraulicInstallation-ds" class="form-control form-control--dropdown" name="hydraulicInstallation" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="TIPPER_HYDRAULIC_INSTALLATION">Tipper Hydraulic Installation</option>
                                        <option value="PUSH_FLOOR_HYDRAULIC_INSTALLATION">Push Floor Hydraulic Installation</option>
                                        <option value="TANKER_HYDRAULIC_INSTALLATION">Tanker Hydraulic Installation</option>
                                        <option value="OTHER">Other</option>
                                    </select>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="drivingCab--ds" name="drivingCab" type="radio" value="" checked data-default="true">
                                        <label for="drivingCab--ds">Any</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="drivingCab-LOCAL_TRAFFIC-ds" name="drivingCab" type="radio" value="LOCAL_TRAFFIC">
                                        <label for="drivingCab-LOCAL_TRAFFIC-ds">Local traffic</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="drivingCab-LONG_DISTANCE_TRAFFIC-ds" name="drivingCab" type="radio" value="LONG_DISTANCE_TRAFFIC">
                                        <label for="drivingCab-LONG_DISTANCE_TRAFFIC-ds">Long distance traffic</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset class="clear-float">
                                <legend class="g-col-12">Interior features</legend>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-AUXILIARY_HEATING-ds" name="features" type="checkbox" value="AUXILIARY_HEATING">
                                        <label for="features-AUXILIARY_HEATING-ds">Auxiliary heating</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-NAVIGATION_SYSTEM-ds" name="features" type="checkbox" value="NAVIGATION_SYSTEM">
                                        <label for="features-NAVIGATION_SYSTEM-ds">Navigation system</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-RETARDER-ds" name="features" type="checkbox" value="RETARDER">
                                        <label for="features-RETARDER-ds">Retarder/Intarder</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-SECONDARY_AIR_CONDITIONING-ds" name="features" type="checkbox" value="SECONDARY_AIR_CONDITIONING">
                                        <label for="features-SECONDARY_AIR_CONDITIONING-ds">Secondary Air Conditioning</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="checkbox">
                                        <input id="features-SUPER_SINGLE_WHEELS-ds" name="features" type="checkbox" value="SUPER_SINGLE_WHEELS">
                                        <label for="features-SUPER_SINGLE_WHEELS-ds">Super Single Wheels</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content cBox--equipment u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Exterior Colour</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small BEIGE" title="Beige">
                                        <input id="color-BEIGE-ds" type="checkbox" name="colors" value="BEIGE"/>
                                        <span class="color-selected BEIGE">&nbsp;</span>
                                    </div>
                                    <label for="color-BEIGE-ds" class="colorpicker-label">Beige</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small BLUE" title="Blue">
                                        <input id="color-BLUE-ds" type="checkbox" name="colors" value="BLUE"/>
                                        <span class="color-selected BLUE">&nbsp;</span>
                                    </div>
                                    <label for="color-BLUE-ds" class="colorpicker-label">Blue</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small BROWN" title="Brown">
                                        <input id="color-BROWN-ds" type="checkbox" name="colors" value="BROWN"/>
                                        <span class="color-selected BROWN">&nbsp;</span>
                                    </div>
                                    <label for="color-BROWN-ds" class="colorpicker-label">Brown</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small YELLOW" title="Yellow">
                                        <input id="color-YELLOW-ds" type="checkbox" name="colors" value="YELLOW"/>
                                        <span class="color-selected YELLOW">&nbsp;</span>
                                    </div>
                                    <label for="color-YELLOW-ds" class="colorpicker-label">Yellow</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small GOLD" title="Gold">
                                        <input id="color-GOLD-ds" type="checkbox" name="colors" value="GOLD"/>
                                        <span class="color-selected GOLD">&nbsp;</span>
                                    </div>
                                    <label for="color-GOLD-ds" class="colorpicker-label">Gold</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small GREY" title="Grey">
                                        <input id="color-GREY-ds" type="checkbox" name="colors" value="GREY"/>
                                        <span class="color-selected GREY">&nbsp;</span>
                                    </div>
                                    <label for="color-GREY-ds" class="colorpicker-label">Grey</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small GREEN" title="Green">
                                        <input id="color-GREEN-ds" type="checkbox" name="colors" value="GREEN"/>
                                        <span class="color-selected GREEN">&nbsp;</span>
                                    </div>
                                    <label for="color-GREEN-ds" class="colorpicker-label">Green</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small ORANGE" title="Orange">
                                        <input id="color-ORANGE-ds" type="checkbox" name="colors" value="ORANGE"/>
                                        <span class="color-selected ORANGE">&nbsp;</span>
                                    </div>
                                    <label for="color-ORANGE-ds" class="colorpicker-label">Orange</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small RED" title="Red">
                                        <input id="color-RED-ds" type="checkbox" name="colors" value="RED"/>
                                        <span class="color-selected RED">&nbsp;</span>
                                    </div>
                                    <label for="color-RED-ds" class="colorpicker-label">Red</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small BLACK" title="Black">
                                        <input id="color-BLACK-ds" type="checkbox" name="colors" value="BLACK"/>
                                        <span class="color-selected BLACK">&nbsp;</span>
                                    </div>
                                    <label for="color-BLACK-ds" class="colorpicker-label">Black</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small SILVER" title="Silver">
                                        <input id="color-SILVER-ds" type="checkbox" name="colors" value="SILVER"/>
                                        <span class="color-selected SILVER">&nbsp;</span>
                                    </div>
                                    <label for="color-SILVER-ds" class="colorpicker-label">Silver</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small PURPLE" title="Purple">
                                        <input id="color-PURPLE-ds" type="checkbox" name="colors" value="PURPLE"/>
                                        <span class="color-selected PURPLE">&nbsp;</span>
                                    </div>
                                    <label for="color-PURPLE-ds" class="colorpicker-label">Purple</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="colorpicker-wrapper">
                                    <div class="colorpicker colorpicker--small WHITE" title="White">
                                        <input id="color-WHITE-ds" type="checkbox" name="colors" value="WHITE"/>
                                        <span class="color-selected WHITE">&nbsp;</span>
                                    </div>
                                    <label for="color-WHITE-ds" class="colorpicker-label">White</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="features-METALLIC-ds" name="features" type="checkbox" value="METALLIC">
                                    <label for="features-METALLIC-ds">Metallic</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Safety and environment</h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <div class="g-col-3">
                                <legend>Emission Class</legend>
                            </div>
                            <div class="g-col-3">
                                <legend>Emissions Sticker</legend>
                            </div>
                        </div>
                        <div class="g-row">
                            <fieldset>
                                <div class="g-col-3">
                                    <select id="emissionClass-ds" class="form-control form-control--dropdown" name="emissionClass" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="EURO1">Euro1</option>
                                        <option value="EURO2">Euro2</option>
                                        <option value="EURO3">Euro3</option>
                                        <option value="EURO4">Euro4</option>
                                        <option value="EURO5">Euro5</option>
                                        <option value="EURO6">Euro6</option>
                                    </select>
                                </div>
                                <div class="g-col-3">
                                    <select id="emissionsSticker-ds" class="form-control form-control--dropdown" name="emissionsSticker" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="EMISSIONSSTICKER_NONE">1 (None)</option>
                                        <option value="EMISSIONSSTICKER_RED">2 (Red)</option>
                                        <option value="EMISSIONSSTICKER_YELLOW">3 (Yellow)</option>
                                        <option value="EMISSIONSSTICKER_GREEN">4 (Green)</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-col-3">
                            <div class="checkbox">
                                <input id="features-ABS-ds" name="features" type="checkbox" value="ABS">
                                <label for="features-ABS-ds">ABS</label>
                            </div>
                        </div>
                        <div class="g-col-3">
                            <div class="checkbox">
                                <input id="features-EBS-ds" name="features" type="checkbox" value="EBS">
                                <label for="features-EBS-ds">EBS</label>
                            </div>
                        </div>
                        <div class="g-col-3">
                            <div class="checkbox">
                                <input id="features-ESP-ds" name="features" type="checkbox" value="ESP">
                                <label for="features-ESP-ds">ESP</label>
                            </div>
                        </div>
                        <div class="g-col-3">
                            <div class="checkbox">
                                <input id="features-FOUR_WHEEL_DRIVE-ds" name="features" type="checkbox" value="FOUR_WHEEL_DRIVE">
                                <label for="features-FOUR_WHEEL_DRIVE-ds">Four wheel drive</label>
                            </div>
                        </div>
                        <div class="g-col-3">
                            <div class="checkbox">
                                <input id="features-PARTICULATE_FILTER_DIESEL-ds" name="features" type="checkbox" value="PARTICULATE_FILTER_DIESEL">
                                <label for="features-PARTICULATE_FILTER_DIESEL-ds">Particulate filter</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cBox cBox--content u-overflow-inherit">
                    <div class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12">
                                <h4 class="h3">Vehicle history and offer details  </h4>
                            </div>
                        </div>
                        <hr/>
                        <div class="g-row">
                            <div class="g-col-3">
                                <div class="form-group">
                                    <label for="daysAfterCreation-ds">Ad online since</label>
                                    <select id="daysAfterCreation-ds" class="form-control form-control--dropdown" name="daysAfterCreation" data-default-index=0>
                                        <option value="">Any</option>
                                        <option value="1">1 day(s)</option>
                                        <option value="3">3 day(s)</option>
                                        <option value="7">7 day(s)</option>
                                        <option value="14">14 day(s)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="form-group">
                                    <label class="info-popup" for="damageUnrepaired-ds">Damaged Vehicles</label>
                                    <span class="tooltip-wrapper" data-tooltip="damaged-vehicle-info" data-position="top" data-alignment="left">
                                        <i class="gicon-info-s icon--s icon--grey-60"></i>
                                        <div id="damaged-vehicle-info" class="cBox cBox--popup cBox--popup-tooltip bottom">
                                            <div class="arrow"></div>
                                            <div class="cBox-body">
                                                <div class="h3 u-text-orange">Info</div>
                                                Vehicle with considerable unrepaired damage, as a result e.g. of a traffic accident, fire, hail, water, engine or transmission damage. Does not apply to: 1.) normal wear; 2.) minor damage; 3.) a car that has been involved in an accident in the past but repaired since.
                                            </div>
                                        </div>
                                    </span>
                                    <select id="damageUnrepaired-ds" class="form-control form-control--dropdown" name="damageUnrepaired" data-default-index=1>
                                        <option value="ALSO_DAMAGE_UNREPAIRED">Any</option>
                                        <option value="NO_DAMAGE_UNREPAIRED" selected>Do not show</option>
                                        <option value="ONLY_DAMAGE_UNREPAIRED">Only show</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="g-row u-pad-bottom-9">
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="features-FULL_SERVICE_HISTORY-ds" name="features" type="checkbox" value="FULL_SERVICE_HISTORY">
                                    <label for="features-FULL_SERVICE_HISTORY-ds">Full Service History</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="features-HU_AU_NEU-ds" name="features" type="checkbox" value="HU_AU_NEU">
                                    <label for="features-HU_AU_NEU-ds">New HU</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="features-RENTING_POSSIBLE-ds" name="features" type="checkbox" value="RENTING_POSSIBLE">
                                    <label for="features-RENTING_POSSIBLE-ds">Renting Possible</label>
                                </div>
                            </div>
                        </div>
                        <div class="g-row u-pad-bottom-9">
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="withImage-true-ds" name="withImage" type="checkbox" value="true">
                                    <label for="withImage-true-ds">Ads with pictures</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="videoEnabled-true-ds" name="videoEnabled" type="checkbox" value="true">
                                    <label for="videoEnabled-true-ds">Ads with video</label>
                                </div>
                            </div>
                            <div class="g-col-3">
                                <div class="checkbox">
                                    <input id="redPencil-true-ds" name="redPencil" type="checkbox" value="true">
                                    <label for="redPencil-true-ds">Discount offers</label>
                                </div>
                            </div>
                        </div>
                        <div class="g-row">
                            <fieldset id="seller-type">
                                <div class="g-col-12">
                                    <legend>Vendor</legend>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="adLimitation--ds" type="radio" checked data-default="true" value="" name="adLimitation">
                                        <label for="adLimitation--ds">Any</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="adLimitation-ONLY_FSBO_ADS-ds" type="radio" value="ONLY_FSBO_ADS" name="adLimitation">
                                        <label for="adLimitation-ONLY_FSBO_ADS-ds">Private seller</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="adLimitation-ONLY_DEALER_ADS-ds" type="radio" value="ONLY_DEALER_ADS" name="adLimitation">
                                        <label for="adLimitation-ONLY_DEALER_ADS-ds">Dealer</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="adLimitation-ONLY_COMMERCIAL_FSBO_ADS-ds" type="radio" value="ONLY_COMMERCIAL_FSBO_ADS" name="adLimitation">
                                        <label for="adLimitation-ONLY_COMMERCIAL_FSBO_ADS-ds">Company vehicles</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="g-row">
                            <fieldset id="seller-rating" disabled class="u-no-pad-bottom">
                                <div class="g-col-12">
                                    <legend>
                                        Dealer rating 
                                        <span class="tooltip-wrapper" data-tooltip="seller-rating-info" data-position="top" data-alignment="left">
                                            <i class="gicon-info-s icon--s icon--grey-60"></i>
                                            <div id="seller-rating-info" class="cBox cBox--popup cBox--popup-tooltip bottom">
                                                <div class="arrow"></div>
                                                <div class="cBox-body">
                                                    <div class="h3 u-text-orange">Info</div>
                                                    <div class="u-text-normal">Ratings are available for dealer offers only. Please select 'Dealer' in the Vendor filter.</div>
                                                </div>
                                            </div>
                                        </span>
                                    </legend>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="sr--ds" type="radio" checked data-default="true" value="" name="sr" alt="Any">
                                        <label for="sr--ds">Any</label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="sr-3-ds" type="radio" value="3" name="sr" alt="Dealer rating: from 3 stars">
                                        <label for="sr-3-ds">
                                            <span class="u-margin-right-9">From</span>
                                            <span class="star-rating-s u-valign-middle u-margin-right-9" data-rating="3">
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="sr-4-ds" type="radio" value="4" name="sr" alt="Dealer rating: from 4 stars">
                                        <label for="sr-4-ds">
                                            <span class="u-margin-right-9">From</span>
                                            <span class="star-rating-s u-valign-middle u-margin-right-9" data-rating="4">
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="g-col-3">
                                    <div class="radio">
                                        <input id="sr-5-ds" type="radio" value="5" name="sr" alt="Dealer rating: 5 stars">
                                        <label for="sr-5-ds">
                                            <span class="star-rating-s u-valign-middle u-margin-right-9" data-rating="5">
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-item">
                                                    <div class="gicon-rating-empty-s">
                                                        <div class="gicon-rating-full-s"></div>
                                                    </div>
                                                </div>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="g-row">
            <div class="g-col-12">
                <article class="cBox u-bg-transparent u-no-pad-horizontal">
                    <section class="cBox-body">
                        <div class="g-row">
                            <div class="g-col-12 u-text-right">
                                <button id="dsp-lower-search-btn" class="dsp-search-btn btn btn--l btn--orange" type="submit">
                                    <i class="gicon-search-s icon--s"></i>
                                    <span class="hit-counter" data-unformatted="21601">21,601</span>
                                    results
                                </button>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </form>
</div>
<div class="skyDspRight">
    <div id="DSP_SKY_RIGHT" class="adv DSP_SKY_RIGHT_en">
        <div id="DSP_SKY_RIGHT-container" class="ad_container" style="width:auto">
            <script type="text/javascript">
                googletag.cmd.push(function() {
                    googletag.display('DSP_SKY_RIGHT-container');
                });
            </script>
        </div>
        <div id="DSP_SKY_RIGHT-criteo-container" class="ad_container" style=" margin-left: auto; margin-right: auto; display:none; width:160px; height:600px;">
            <script>
                mobile.adv.criteoAdBlockTraffic.createPlacement("1236529", "DSP_SKY_RIGHT", "", "", "passback-160x600");
            </script>
        </div>
    </div>
</div>
</div>




</body>

@endsection