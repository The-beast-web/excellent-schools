<?php

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\CourseBuilderController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\InstructorController as AdminInstructorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Instructor\AssignmentController;
use App\Http\Controllers\Instructor\CreateCourseController;
use App\Http\Controllers\Instructor\DashboardController as InstructorDashboardController;
use App\Http\Controllers\Instructor\MyCourseController;
use App\Http\Controllers\Instructor\ProfileController as InstructorProfileController;
use App\Http\Controllers\Instructor\QuizController;
use App\Http\Controllers\Instructor\SettingsController as InstructorSettingsController;
use App\Http\Controllers\Student\CourseController as StudentCourseController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\OrderHistoryController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Student\QuizAttemptsController;
use App\Http\Controllers\Student\ReviewsController;
use App\Http\Controllers\Student\SettingsController;
use App\Http\Controllers\Student\WishlistController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\BookController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\CourseController;
use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\FaqController;
use App\Http\Controllers\Website\InstructorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

/* Website Routes */
Route::name('website.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home'); //Home Route
    /* Course Routes */
    Route::get('/courses', [CourseController::class, 'index'])->name('course');
    Route::get('/course-detail', [CourseController::class, 'course_detail'])->name('course-detail');
    Route::get('/course-checkout', [CourseController::class, 'checkout'])->name('course-checkout');
    /* End of Course Routes */

    /* Book Routes */
    Route::get('/books', [BookController::class, 'index'])->name('book');
    Route::get('/book-detail', [BookController::class, 'book_detail'])->name('book-detail');
    /* End of Book Routes */

    /* Instructor Routes */
    Route::get('/instructors', [InstructorController::class, 'index'])->name('instructor');
    Route::get('/instructor-detail', [InstructorController::class, 'detail'])->name('instructor-detail');
    /* End Instructor Routes */

    /* Event Routes */
    Route::get('/events', [EventController::class, 'index'])->name('event');
    Route::get('/event-detail', [EventController::class, 'detail'])->name('event-detail');
    Route::get('/ticket', [EventController::class, 'ticket'])->name('event-ticket');
    /* End of Event Routes */

    /* Blog Routes */
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog-detail', [BlogController::class, 'detail'])->name('blog-detail');
    /* End of Blog Routes */

    /* Cart Routes */
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    /* End of Card Routes */

    /* Checkout Routes */
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    /* End of Checkout Routes */

    /* FAQ Routes */
    Route::get('/faqs', [FaqController::class, 'index'])->name('faq');
    /* End of FAQ Routes */
});
/* End of Website Routes */

/* Student Routes */
Route::prefix('/student')->name('student.')->group(function () {
    /* Dashboard Routes */
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    /* End of Dashboard Routes */

    /* Profile Routes */
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    /* End of Profile Routes */

    /* Course Routes */
    Route::get('/enrolled-courses', [StudentCourseController::class, 'index'])->name('course');
    Route::get('/lesson', [StudentCourseController::class, 'lesson'])->name('course-lesson');
    /* End of Course Routes */

    /* Wishlist Routes */
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    /* End of Wishlist Routes */

    /* Reviews Routes */
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
    /* End of Reviews Routes */

    /* Quiz Attempts Routes */
    Route::get('/quiz-attempts', [QuizAttemptsController::class, 'index'])->name('quiz-attempt');
    /* End of Quiz Attempts */

    /* Order History Routes */
    Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('order-history');
    /* End of Order History */

    /* Settings Routes */
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    /* End of Settings Routes */
});
/* End of Student Routes */

/* Instructor Routes */
Route::prefix('/instructor')->name('instructor.')->group(function () {
    /* Dashboard Routes */
    Route::get('/', [InstructorDashboardController::class, 'index'])->name('dashboard');
    /* End of Dashboard Routes */

    /* Profile Routes */
    Route::get('/profile', [InstructorProfileController::class, 'index'])->name('profile');
    /* End of Profile Routes */

    /* My Course Routes */
    Route::get('/mycourses', [MyCourseController::class, 'index'])->name('mycourse');
    /* End of My Course Routes */

    /* Quiz Routes */
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
    /* End of Quiz Routes */

    /* Assignments Routes */
    Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignment');
    /* End of Assignment Routes */

    /* Settings Routes */
    Route::get('/settings', [InstructorSettingsController::class, 'index'])->name('setting');
    /* End of Settings Routes */

    /* Create Course Routes */
    Route::get('/create-course', [CreateCourseController::class, 'index'])->name('create-course');
    Route::get('/course-manager', [CreateCourseController::class, 'course_manager'])->name('course-manager');
    Route::get('/course-manager/create-lesson', [CreateCourseController::class, 'create_lesson'])->name('create-lesson');
    Route::get('/course-manager/create-topic', [CreateCourseController::class, 'create_topic'])->name('create-topic');
    /* End of Create Course Routes */
});
/* End of Instructor Routes */

/* Admin Routes */
Route::prefix('/admin')->name('admin.')->group(function () {
    /* Dashboard Routes */
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    /* End of Dashboard Routes */

    /* Course Routes */
    Route::get('/courses', [AdminCourseController::class, 'index'])->name('courses');
    Route::get('/course-detail', [AdminCourseController::class, 'course_detail'])->name('course-detail');
    Route::get('/lesson-detail', [AdminCourseController::class, 'lesson_detail'])->name('lesson-detail');
    Route::get('/course-category', [AdminCourseController::class, 'category'])->name('course-category');
    Route::get('/course-orders', [AdminCourseController::class, 'order'])->name('course-orders');
    Route::get('/create-course', [AdminCourseController::class, 'add'])->name('create-course');
    /* End of Course Routes */

    /* Book Routes */
    Route::get('/books', [AdminBookController::class, 'index'])->name('books');
    Route::get('/books/detail', [AdminBookController::class, 'detail'])->name('book-detail');
    Route::get('/books/orders', [AdminBookController::class, 'order'])->name('book-orders');
    Route::get('/books/orders/detail', [AdminBookController::class, 'order_detail'])->name('book-order-detail');
    /* End of Book Routes */

    /* All Customers Routes */
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/customer-detail', [CustomerController::class, 'detail'])->name('customer-detail');
    /* End of All Customers Routes */

    /* Instructor Routes */
    Route::get('/instructors', [AdminInstructorController::class, 'index'])->name('instructors');
    Route::get('/instructor/detail', [AdminInstructorController::class, 'detail'])->name('instructor-detail');
    Route::get('/become-a-teacher-requests', [AdminInstructorController::class, 'request'])->name('instructor-request');
    Route::get('/become-a-teacher-requests/test', [AdminInstructorController::class, 'request_test'])->name('instructor-request-test');
    Route::get('/instructors/payments', [AdminInstructorController::class, 'payment'])->name('instructor-payment');
    Route::get('/instructors/payments/detail', [AdminInstructorController::class, 'payment_detail'])->name('instructor-payment-detail');
    Route::get('/instructors/payments/detail/print', [AdminInstructorController::class, 'payment_detail_print'])->name('instructor-payment-detail-print');
    /* End of Instructor Routes */

    /* Student Routes */
    Route::prefix('/students')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('main');
        Route::get('/detail', [StudentController::class, 'detail'])->name('detail');
    });
    /* End of Student Routes */

    /* Blog Routes */
    Route::prefix('/blog')->name('blog.')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('main');
        Route::get('/add', [AdminBlogController::class, 'add'])->name('add');
    });
    /* End of Blog Routes */

    /* Event Routes */
    Route::prefix('/events')->name('event.')->group(function () {
        Route::get('/', [AdminEventController::class, 'index'])->name('main');
        Route::get('/detail', [AdminEventController::class, 'detail'])->name('detail');
        Route::get('/orders', [AdminEventController::class, 'order'])->name('orders');
        Route::get('/orders/detail', [AdminEventController::class, 'order_detail'])->name('orders.detail');
    });
    /* End of Event Routes */

    /* Faq Routes */
    Route::prefix('faq')->name('faq.')->group(function () {
        Route::get('/', [AdminFaqController::class, 'index'])->name('main');
    });
    /* End of Faq Routes */

    /* Setting Routes */
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    /* End of Setting Routes */

    /* Course Builder Routes */
    Route::prefix('/course-builder')->name('course-builder.')->group(function () {
        Route::get('/', [CourseBuilderController::class, 'index'])->name('main');
        Route::get('/create-lesson', [CourseBuilderController::class, 'create_lesson'])->name('lesson.create');
    });
});
