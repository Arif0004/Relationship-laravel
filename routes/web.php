 <?php

    use App\Http\Controllers\CustomerController;
    use App\Http\Controllers\oneToManyController;
    use App\Http\Controllers\oneToOneController;
    use App\Http\Controllers\studentController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\viewController;
    use Illuminate\Support\Facades\Route;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/one-to-one', [oneToOneController::class, 'index']);

    Route::get('/one-to-many', [oneToManyController::class, 'index']);
