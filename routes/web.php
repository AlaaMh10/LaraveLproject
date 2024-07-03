<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\IndicatorCategoryController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\CustomerController;
use App\Http\Controllers\Demo\DemoController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
   return view('welcome');
});
//user routes********************


Route::middleware(['user-auth'])->group(function () {
        Route::controller(ClientController::class)->group(function () {
            Route::get('/customer/logout', 'destroy')->name('customer.logout');
            Route::get('/customer/profile', 'profile')->name('customer.profile');
            Route::get('/updatecustomer/profile', 'EditProfile')->name('updatecustomer.profile');
            Route::post('/savecustomer/profile', 'StoreProfile')->name('savecustomer.profile');

            Route::get('/purchase', 'PurchaseHistory')->name('purchase');
            
    
            Route::get('/show/password', 'ChangePassword')->name('change_password');
            Route::post('/modify/password', 'UpdatePassword')->name('update_password');



            
        });
        
        
       
        ////test

        

        


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::controller(DemoController::class)->group(function () {
            Route::get('/', 'HomeMain')->name('home');
            Route::get('/About', 'About')->name('about');
            Route::get('/MarketPlace', 'MarketPlace')->name('MarketPlace');
            Route::get('/Contact', 'ContactMethod')->name('contact');
        })->middleware('check');
    
        
        Route::controller(PortfolioController::class)->group(function () {
            
            
            Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
            
            Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
            
            
        });
       

        Route::controller(ContactController::class)->group(function () {
            Route::get('/contact', 'Contact')->name('contact.me');
            Route::post('/store/message', 'StoreMessage')->name('store.message');
            
        });
        
        
    });
    // Admin All Route *****************************
    
    
    // // Home Slide All Route
    // Route::controller(HomeSliderController::class)->group(function () {
        //     Route::get('/home/slide', 'HomeSlider')->name('home.slide');
        //     Route::post('/update/slide', 'UpdateSlider')->name('update.slider');
        // });


        Route::get('/checkout/{id}', [StripeController::class, 'checkout'])->name('checkout');
        Route::get('/success', [StripeController::class, 'success'])->name('checkout.success');
        Route::get('/cancel', [StripeController::class, 'cancel'])->name('checkout.cancel');
        Route::any('/stripe/webhook', [StripeController::class, 'handle'])->name('webhook.handle');
        
        
        
        Route::controller(IndicatorController::class)->group(function () {
            Route::get('/indicator', 'HomeIndicator')->name('home.indicator');
            Route::get('/indicator/details/{id}', 'indicatorDetails')->name('indicator.details');
        Route::get('/category/indicator/{id}', 'CategoryIndicator')->name('category.indicator');
            
        });
      
// About Page All Route 
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
    
    
    Route::get('/about', 'HomeAbout')->name('home.about');
  

});



// Porfolio All Route 
// Blog Category All Routes 



// Blog All Route 

// Footer All Route 




// Contact All Route 







Route::middleware(['auth'])->group(function () {


    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard','show_data')->name('dashboard');
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');        
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
        ////test

    });
    


    Route::controller(CustomerController::class)->group(function () {
        Route::get('/Customer/all', 'CustomerAll')->name('customers.all');
        Route::get('/Customer/update/{id}', 'CustomerUpdate')->name('customer.update');
        Route::post('/Customer/edit', 'CustomerEdit')->name('customer.edit');
        Route::post('/Customer/delete', 'CustomerDelete')->name('customer.delete');
        
        
    });
    

    Route::controller(IndicatorController::class)->group(function () {
        Route::get('/all/indicator', 'AllIndicator')->name('all.indicator');
        Route::get('/add/indicator', 'AddIndicator')->name('add.indicator');
        Route::get('/add/indicatorImage', 'AddIndicatorImage')->name('add.indicator.image');
        Route::post('/store/indicator', 'StoreIndicator')->name('store.indicator');
        Route::get('/edit/indicator/{id}', 'EditIndicator')->name('edit.indicator');
        Route::post('/update/indicator', 'UpdateIndicator')->name('update.indicator');
        Route::get('/delete/indicator/{id}', 'DeleteIndicator')->name('delete.indicator');
        
        
    });

    
    Route::controller(IndicatorCategoryController::class)->group(function () {
        
        Route::get('/all/indicator/category', 'AllIndicatorCategory')->name('all.indicator.category');
        Route::get('/add/indicator/category', 'AddIndicatorCategory')->name('add.indicator.category');  
        Route::post('/store/indicator/category', 'StoreIndicatorCategory')->name('store.indicator.category');
        
        Route::get('/edit/indicator/category/{id}', 'EditIndicatorCategory')->name('edit.indicator.category');
        
        Route::post('/update/indicator/category/{id}', 'UpdateIndicatorCategory')->name('update.indicator.category');
        
        Route::get('/delete/indicator/category/{id}', 'DeleteIndicatorCategory')->name('delete.indicator.category');     
        Route::get('/category/indicator/{id}', 'CategoryIndicator')->name('category.indicator');
        
    });
    
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    ////////////Homeslide//////////////////
    Route::controller(HomeSliderController::class)->group(function () {
       Route::get('/home/slide', 'HomeSlider')->name('home.slide');
       Route::post('/update/slide', 'UpdateSlider')->name('update.slider');
    });
    


    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
        Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
        Route::post('/store/portfolio', 'StorePortfolio')->name('store.portfolio');
        Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
        Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.portfolio');
        Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
    
    });
    
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact/message', 'ContactMessage')->name('contact.message');   
        Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');  
        
    });
        Route::controller(FooterController::class)->group(function () {
            Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
            Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
        });



       

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
// Route::get('/contact', function () {
//     return view('contact');
// });


