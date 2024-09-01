<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
</style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{ __('Home') }}</a>
                    <span></span> {{ __('Categories') }}
                    <span></span> {{ __('Add New') }}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                                        {{ __('Categories') }}
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('Admin.categories') }}" class="btn btn-success float-end">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                                            {{ __('Categories') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                               <form>
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Categoory Name"/ >
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="slug" class="form-label">{{ __('slug') }}</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter Categoory slug"/ >
                                    </div>
                                    <button class="btn btn-primary float-end">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                                        {{ __('Submit') }}</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>
