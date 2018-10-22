@extends('admin.main')

@section('content')
    <div class="card-content">
        <div class="card-body">
            <ul class="nav nav-tabs nav-underline no-hover-bg">
            <li class="nav-item">
                <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true">Limit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="base-market" data-toggle="tab" aria-controls="market" href="#market" aria-expanded="false">Market</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="base-stop-limit" data-toggle="tab" aria-controls="stop-limit" href="#stop-limit" aria-expanded="false">Stop Limit</a>
            </li>
            </ul>
    
            <div class="tab-content px-1 pt-1">
            <div role="tabpanel" class="tab-pane active" id="limit" aria-expanded="true" aria-labelledby="base-limit">
                <div class="row">
                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-limit-buy-price">Price</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-limit-buy-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-buy-price">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-limit-buy-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-limit-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-buy-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-limit-buy-total">Total</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-limit-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-buy-total">
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-xl-6 pl-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-price">Price</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-limit-sell-price" class="form-control" placeholder="$ 11916.9" name="btc-limit-sell-price">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-limit-sell-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-limit-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-limit-sell-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-limit-sell-total">Total</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-limit-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-limit-sell-total">
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
    
            <div class="tab-pane" id="market" aria-labelledby="base-market">
                <div class="row">
                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-market-buy-price">Price</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-market-buy-price" class="form-control" placeholder="Market prise $" name="btc-market-buy-price">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-market-buy-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-market-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-buy-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-xl-6 pl-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-price">Price</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-market-sell-price" class="form-control" placeholder="Market prise $" name="btc-market-sell-price">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-market-sell-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-market-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-market-sell-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
    
            <div class="tab-pane" id="stop-limit" aria-labelledby="base-stop-limit">
                <div class="row">
                <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Buy BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-buy">Stop</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-buy" class="form-control" placeholder="$ 11916.9" name="btc-stop-buy">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-buy-limit">Limit</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-buy-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-buy-limit">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-buy-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-buy-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-buy-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-buy-total">Total</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-stop-buy-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-buy-total">
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-success btn-block btn-glow"> Buy BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-xl-6 pl-2 p-0">
                    <div class="row my-2">
                    <div class="col-4">
                        <h5 class="text-bold-600 mb-0">Sell BTC</h5>
                    </div>
                    <div class="col-8 text-right">
                        <p class="text-muted mb-0">BTC Balance: 1.2654898</p>
                    </div>
                    </div>
                    <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-sell">Stop</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-sell" class="form-control" placeholder="$ 11916.9" name="btc-stop-sell">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-sell-limit">Limit</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-sell-limit" class="form-control" placeholder="$ 12000.0" name="btc-stop-sell-limit">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-sell-amount">Amount</label>
                        <div class="col-md-9">
                            <input type="number" id="btc-stop-sell-amount" class="form-control" placeholder="0.026547 BTC" name="btc-stop-sell-amount">
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="button" class="btn round btn-outline-secondary btn-sm">25%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">50%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">75%</button>
                            <button type="button" class="btn round btn-outline-secondary btn-sm">100%</button>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="btc-stop-sell-total">Total</label>
                        <div class="col-md-9">
                            <input type="number" disabled="" id="btc-stop-sell-total" class="form-control" placeholder="$ 318.1856" name="btc-stop-sell-total">
                        </div>
                        </div>
                        <div class="form-actions pb-0">
                        <button type="submit" class="btn round btn-danger btn-block btn-glow"> Sell BTC </button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
    
            </div>
        </div>
    </div>
@endsection

