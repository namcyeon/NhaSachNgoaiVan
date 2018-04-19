<?php $__env->startSection('update-testimonial-post-content'); ?>

<?php echo $__env->make('pages-message.form-submit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo e(trans('admin.update_post_page_title')); ?> &nbsp;&nbsp;&nbsp;&nbsp;</h3>
      <div class="box-tools pull-right">
        <a class="btn btn-default btn-xs" href="<?php echo e(route('admin.testimonial_post_list_content')); ?>"><?php echo e(trans('admin.posts_list')); ?></a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" href="<?php echo e(route('admin.testimonial_post_content')); ?>"><?php echo e(trans('admin.add_new_post_top_title')); ?></a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" target="_blank" href="<?php echo e(route('testimonial-single-page', $testimonial_update_data['post_slug'])); ?>"><?php echo e(trans('admin.view')); ?></a>
        <button class="btn btn-primary btn-block" type="submit"><?php echo e(trans('admin.update')); ?></button>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-8">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.post_title')); ?></h3>
        </div>
        <div class="box-body">
          <input type="text" placeholder="<?php echo e(trans('admin.post_title_placeholder')); ?>" class="form-control" name="testimonial_post_title" id="testimonial_post_title" value="<?php echo e($testimonial_update_data['post_title']); ?>">
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.post_description')); ?></h3>
        </div>
        <div class="box-body">
            <textarea id="testimonial_description_editor" name="testimonial_description_editor" class="dynamic-editor" placeholder="<?php echo e(trans('admin.post_description_placeholder')); ?>"><?php echo $testimonial_update_data['post_content']; ?></textarea>
        </div>
      </div>
      
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-upload"></i>
          <h3 class="box-title"><?php echo e(trans('admin.featured_image')); ?></h3>
          <div class="box-tools pull-right">
            <div data-toggle="modal" data-dropzone_id="testimonial_dropzone_file_uploader" data-target="#testimonialUploader" class="icon product-uploader"><?php echo e(trans('admin.upload_image')); ?></div>
          </div>
        </div>
        <div class="box-body testimonial-content">
          <div class="uploaded-testimonial-image">
            <?php if($testimonial_update_data['testimonial_image_url']): ?>
            <div class="testimonial-sample-img" style="display: none;"><img class="upload-icon img-responsive" src="<?php echo e(asset('resources/assets/images/upload.png')); ?>"></div>
            <div class="testimonial-uploaded-image" style="display:block;"><img class="img-responsive" src="<?php echo e($testimonial_update_data['testimonial_image_url']); ?>"><div class="remove-img-link"><button type="button" data-target="testimonial_image" class="btn btn-default attachtopost"><?php echo e(trans('admin.remove_image')); ?></button></div></div>
            <?php else: ?>
              <div class="testimonial-sample-img" style="display:block;"><img class="upload-icon img-responsive" src="<?php echo e(asset('resources/assets/images/upload.png')); ?>"></div>
              <div class="testimonial-uploaded-image" style="display: none;"><img class="img-responsive"><div class="remove-img-link"><button type="button" data-target="testimonial_image" class="btn btn-default attachtopost"><?php echo e(trans('admin.remove_image')); ?></button></div></div>
            <?php endif; ?>
          </div>
            
          <div class="modal fade" id="testimonialUploader" tabindex="-1" role="dialog" aria-labelledby="updater" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">✕</button>
                  <br>
                  <i class="icon-credit-card icon-7x"></i>
                  <p class="no-margin"><?php echo e(trans('admin.you_can_upload_1_image')); ?></p>
                </div>
                <div class="modal-body">             
                  <div class="uploadform dropzone no-margin dz-clickable testimonial_dropzone_file_upload" id="testimonial_dropzone_file_upload" name="testimonial_dropzone_file_upload">
                    <div class="dz-default dz-message">
                      <span><?php echo e(trans('admin.drop_your_cover_picture_here')); ?></span>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default attachtopost" data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?php echo e(trans('admin.testimonial_more_details_title')); ?></h3>
        </div>
        
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3 control-label" for="inputClientName"><?php echo e(trans('admin.testimonial_client_name_title')); ?></label>
            <div class="col-sm-9">
              <input type="text" placeholder="<?php echo e(trans('admin.testimonial_client_name_placeholder')); ?>" class="form-control" name="testimonial_client_name" id="testimonial_client_name" value="<?php echo e($testimonial_update_data['testimonial_client_name']); ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="inputJobTitle"><?php echo e(trans('admin.testimonial_job_title')); ?></label>
            <div class="col-sm-9">
              <input type="text" placeholder="<?php echo e(trans('admin.testimonial_job_title_placeholder')); ?>" class="form-control" name="testimonial_job_title" id="testimonial_job_title" value="<?php echo e($testimonial_update_data['testimonial_job_title']); ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="inputCompanyName"><?php echo e(trans('admin.testimonial_company_name_title')); ?></label>
            <div class="col-sm-9">
              <input type="text" placeholder="<?php echo e(trans('admin.testimonial_company_name_placeholder')); ?>" class="form-control" name="testimonial_company_name" id="testimonial_company_name" value="<?php echo e($testimonial_update_data['testimonial_company_name']); ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="inputUrl"><?php echo e(trans('admin.testimonial_url')); ?></label>
            <div class="col-sm-9">
              <input type="text" placeholder="<?php echo e(trans('admin.testimonial_url_placeholder')); ?>" class="form-control" name="testimonial_url" id="testimonial_url" value="<?php echo e($testimonial_update_data['testimonial_url']); ?>">
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-eye"></i>
          <h3 class="box-title"><?php echo e(trans('admin.visibility')); ?></h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-sm-3 control-label" for="inputVisibility"><?php echo e(trans('admin.status')); ?></label>
                <div class="col-sm-9">
                  <select class="form-control select2" name="testimonial_post_visibility" style="width: 100%;">
                    <?php if($testimonial_update_data['post_status'] == 1): ?>
                    <option selected="selected" value="1"><?php echo e(trans('admin.enable')); ?></option>
                    <?php else: ?>
                    <option value="1"><?php echo e(trans('admin.enable')); ?></option>
                    <?php endif; ?>
                    
                    <?php if($testimonial_update_data['post_status'] == 0): ?>
                    <option selected="selected" value="0"><?php echo e(trans('admin.disable')); ?></option>          
                    <?php else: ?>
                    <option value="0"><?php echo e(trans('admin.disable')); ?></option>
                    <?php endif; ?>      
                  </select>       
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>  
  </div>
  <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
  <input type="hidden" name="hf_post_type" id="hf_post_type" value="update">
  <input type="hidden" name="image_url" id="image_url" value="<?php echo e($testimonial_update_data['testimonial_image_url']); ?>">
</form>

<?php $__env->stopSection(); ?>