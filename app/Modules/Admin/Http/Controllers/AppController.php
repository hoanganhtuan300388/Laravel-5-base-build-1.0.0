<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppController extends Controller
{

    /**
     * admin search list common function
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function search(Request $request)
    {
        $queries    = [];
        $prevUrl    = app('url')->previous();
        $parseUrl   = parse_url($prevUrl, PHP_URL_QUERY);

        if (!empty($parseUrl)) {
            parse_str($parseUrl, $oldQueries);
            if (!empty($oldQueries['limit'])) {
                $queries['limit'] = $oldQueries['limit'];
            }
        }

        foreach ($request->all() as $key => $val) {
            $val = trim($val);
            if ($val != '' && $key != '_token') {
                if ($key != 'limit' || $val != ADMIN_DEFAULT_LIMIT) {
                    if (is_array($val)) {
                        $queries[$key] = urlencode(serialize($val));
                    } else {
                        $queries[$key] = $val;
                    }
                }
            }
        }

        $previousRoute = app('router')->getRoutes()->match(app('request')->create($prevUrl))->getName();

        if (!empty($queries)) {
            return redirect()->route($previousRoute, $queries);
        }

        return redirect()->route($previousRoute);
    }

}
