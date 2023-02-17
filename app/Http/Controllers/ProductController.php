<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    
    const ITEMS_PER_PAGE = 4;
    const ORDER_BY = 'product.updated_at';
    const ORDER_TYPE = 'desc';

    private function getOrder($orderArray, $order, $default) {
        $value = array_search($order, $orderArray);
        if(!$value) {
            return $default;
        }
        return $value;
    }

    private function getOrderBy($order) {
        return $this->getOrder($this->getOrderBys(), $order, self::ORDER_BY);
    }

    private function getOrderBys() {
        return [
            'product.id'           => 'b1',
            'product.name'       => 'b2',
            'product.price'       => 'b3',
        ];
    }

    private function getOrderType($order) {
        return $this->getOrder($this->getOrderTypes(), $order, self::ORDER_TYPE);
    }

    private function getOrderTypes() {
        return [
            'asc'  => 't1',
            'desc' => 't2',
        ];
    }

    private function getOrderUrls($oBy, $oType, $q, $route) {
        $urls = [];
        $orderBys = $this->getOrderBys();
        $orderTypes = $this->getOrderTypes();
        foreach($orderBys as $indexBy => $by) {
            foreach($orderTypes as $indexType => $type) {
                if($oBy == $indexBy && $oType == $indexType) {
                    $urls[$indexBy][$indexType] = url()->full() . '#';
                } else {
                    $urls[$indexBy][$indexType] = route($route, [
                                                            'orderby'   => $by,
                                                            'ordertype' => $type,
                                                            'q'         => $q]);
                }
            }
        }
        return $urls;
    }
    
    
    
    
    function index(Request $request) {
        //consulta, ordenación y tipo de ordenación
        $q = $request->input('q', '');
        $orderby = $this->getOrderBy($request->input('orderby'));
        $ordertype = $this->getOrderType($request->input('ordertype'));
        
        //construcción de la consulta
        $product = DB::table('product')
                    ->select('product.*');

        //agregando condición a la consulta, si la hay
        
        if($q != '') {
            switch ($q){
                case 'men':
                    $product = $product->where('product.genre', 'like',   $q );
                break;
                case 'women':
                    $product = $product->where('product.genre', 'like',  $q );
                break;
                case 'children':
                    $product = $product->where('product.genre', 'like', $q );
                break;
                default:
                    $product = $product->where('product.name', 'like', '%' . $q . '%')
                            ->orWhere('product.id', 'like', '%' . $q . '%')
                            ->orWhere('product.genre', 'like', '%' . $q . '%')
                            ->orWhere('product.price', 'like', '%' . $q . '%');
                            
                break;
                    
                
            }
            
        }

        //agregando el orden a la consulta
        $product = $product->orderBy($orderby, $ordertype);
        if($orderby != self::ORDER_BY) {
            $product = $product->orderBy(self::ORDER_BY, self::ORDER_TYPE);
        }

        //ejecutar la consulta, usando la paginación
        $products = $product->paginate(self::ITEMS_PER_PAGE)->withQueryString();
        
        //dd($products);
        return view('main.shop', ['order'  => $this->getOrderUrls($orderby, $ordertype, $q, 'shop'),
                                    'q'     => $q,
                                    'url'   => url('product'),
                                    'products' => $products]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function home()
    {
        $products = Product::orderBy('updated_at', 'desc')->take(3)->get();
        return view('main.home', ['products' => $products]);
    }
    
    public function shop()
    {
        $products = Product::orderBy('updated_at', 'desc')->get();
        return view('main.shop', ['products' => $products]);
    }
    
     public function show(Product $product)
    {
        return view('main.single', ['product' => $product]);
    }
    
}
