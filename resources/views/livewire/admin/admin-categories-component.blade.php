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
                                    <a href="{{ route('Admin.categories.create') }}"
                                      class="btn btn-success float-end">
                                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-square-rounded-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" /><path d="M15 12h-6" /><path d="M12 9v6" /></svg>
                                      {{   __('Add New') }}</a>
                                </div>
                               </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>Slug</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i =( $categories->currentPage() -1 )* $categories->perPage();
                                            @endphp
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{++$i }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>
                                                        <a class="btn btn-primary rounded-pill" href=""></a>
                                                        <a class="btn btn-danger rounded-pill" href=""></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                    {{ $categories->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>
