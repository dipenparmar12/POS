{{-- 
    $modal_id = 'create_category_modal';
    $modal_submit_id  = 'create_category_modal_btn'; 
--}}

{{-- Modal Component --}}
<div class="col-lg-4 col-md-6 col-sm-12">
    <!-- Modal -->
    <div class="modal animated bounceIn text-left " id="{{$modal_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
