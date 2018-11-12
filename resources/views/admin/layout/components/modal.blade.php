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


                {{-- <div class="modal-footer">
                    <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
                    <button type="button" id="{{$modal_submit_id}}" class="btn box-shadow-1 round btn-outline-success">Save</button>
                </div> --}}

            </div>
        </div>
    </div>
</div>
