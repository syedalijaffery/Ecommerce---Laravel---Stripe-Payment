

<!-- header -->
<div class="agileits_header">



    <div class="product_list_header">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">

                            @if(Auth::check())
                                <li><a href="{{ route('user.profile') }}">{{Auth::user()->name}}</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                            @else
                                <li><a href="{{ route('user.signup') }}">Signup</a></li>
                                <li><a href="{{ route('user.signin') }}">Signin</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <div class="product_list_header">
    <div class="w3l_header_right1">
        <form action="{{ route('product.shoppingCart') }}"  class="last">
            <fieldset>
                <input type="submit" name="submit" value="View your cart" class="button" />
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </fieldset>

        </form>
    </div>
    </div>
    <div class="clearfix"> </div>
</div>