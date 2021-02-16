                <div class="cell small-12 table-scroll" >
                  <div class="box box_shadow " style="min-width: 800px;">
                    
                    <div class="grid-x grid-margin-x">
                      <div class="cell small-12 large-12"><h1>پیمان جدید</h1></div>
                    </div>

                      <div id="component">
                        <?php echo form_open(); ?>

                          <div class="grid-x grid-margin-x">
                            <div class="cell small-12 large-4">
                              <label>
                                عنوان پیمان :
                                <input type="text" name="title">
                              </label>
                            </div>
                            <div class="cell small-12 large-4">
                              <label>
                                پروژه :
                                <select name="project_id" id="">
                                  <?php foreach ($projects as $key => $value) { ?>
                                  <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                  <?php } ?>
                                </select>
                              </label>
                            </div>
                            <div class="cell small-12 large-4">
                              <label>
                                طرح :
                                <input type="text" name="plan">
                              </label>
                            </div>
                            <div class="cell small-12 large-4">
                              <label>
                                نوع بودجه :
                                <input type="text" name="budget_type">
                              </label>
                            </div>
                            <div class="cell small-12 large-4">
                              <label>
                                فهرست بها مبنا :
                                <input type="text" name="budget_id">
                              </label>
                            </div>
                          </div>
                          
                          <div class="grid-x grid-margin-x">
                            <div class="cell small-12"><br></div>
                            <div class="cell small-12 large-10"></div>
                            <div class="cell small-12 large-2">
                              <button type="submit" class="button warning expanded">
                                <i class="fal fa-save fa-fw"></i> ذخیره و بازگشت</button>
                            </div>
                          </div>

                        <?php echo form_close(); ?>
                      </div>

                  </div>
                </div>