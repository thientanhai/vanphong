<div class="filtercate">
<div class="search-cate">
                               
                               <p class="tt-search">Địa điểm:</p>
                               <div class="p-txt p-txt-lct">
                               <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="shrink-0"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" fill="#64748B"></path></svg>
                               </div>
                               <div class="opfilter">
                                  
                                   @if(!empty(request()->input('city_id')))
                                               <span id="city_id_mb"  class="txt-begin" obj="{{ request()->input('city_id') }}" >
                                                   {{ Location::getCityNameById(request()->input('city_id')) }}
                                               </span>
                                               @else
                                               <span id="city_id_mb"  class="txt-begin" obj="" >
                                                   Chọn
                                               </span>
                                    @endif
                               <div class="icon-row">
                               
                               <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.58002L12 13.17L16.59 8.58002L18 10L12 16L6 10L7.41 8.58002Z"></path></svg>
                               </div>
                               </div>
                               <div class="conten-filter ul_ward_id_cate">
                                   <div style="padding: 10px;position: sticky; top: 0;background: #fff;"><input type="text" style="padding-left: 10px;" onkeyup="searchwardcate(this)" class="txt-location"></div>
                               
                               </div>
                           </div>     
<div class="search-cate">
                               
                                    <p class="tt-search">Giá:</p>
                                    <div class="p-txt p-txt-price">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="shrink-0"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" fill="#64748B"></path></svg>
                        
                                    </div>
                                    <div class="opfilter">
                                        <span id="choseprice"  class="txt-begin" obj="">Chọn</span>
                                        
                                    <div class="icon-row">
                                    
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.58002L12 13.17L16.59 8.58002L18 10L12 16L6 10L7.41 8.58002Z"></path></svg>
                                    </div>
                                    </div>
                                    <div class="conten-filter" id="fprice">
                                    
                                    </div>
                                </div>
                                <div class="search-cate">
                                <p class="tt-search">Sắp xếp:</p>
                                <div class="p-txt p-txt-sort">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="shrink-0"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" fill="#64748B"></path></svg>
                                </div>
                                <div class="opfilter">
                                        <span id="chosesort"  class="txt-begin" obj="">Mới nhất</span>
                                        
                                    <div class="icon-row">
                                    
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.58002L12 13.17L16.59 8.58002L18 10L12 16L6 10L7.41 8.58002Z"></path></svg>
                                    </div>
                                    </div>
                                    <div class="conten-filter" id="fsort">
                                            <p class="p-search-cate" obj="date_desc">Mới nhất</p>
                                            <p class="p-search-cate" obj="price_asc">Giá tăng dần</p>
                                            <p class="p-search-cate" obj="price_desc">Giá giảm dần</p>
                                    </div>
                                </div>
                               
                                <div class="search-cate">
                               
                               <p class="tt-search">Loại hình:</p>
                               <div class="p-txt p-txt-type">
                               <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="shrink-0"><path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" fill="#64748B"></path></svg>
                               </div>
                               <div class="opfilter">
                                   <span id="chosetype" class="txt-begin" obj="">Chọn</span>
                                   
                               <div class="icon-row">
                               
                               <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.58002L12 13.17L16.59 8.58002L18 10L12 16L6 10L7.41 8.58002Z"></path></svg>
                               </div>
                               </div>
                               <div class="conten-filter" id="ftype" name="type">
                               @php
                                    use Botble\RealEstate\Enums\PropertyTypeEnum;
                                    $types = PropertyTypeEnum::labels();
                                @endphp

                                    @foreach ($types as $key => $type)
                                        <p class="p-search-cate" obj="{{ $key }}" @if (request()->input('type') == $key) selected @endif>{{ $type }}</p>
                                    @endforeach
                             


                               </div>
</div>