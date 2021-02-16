
                <div class="cell small-12 table-scroll" >
                  <div class="box box_shadow " style="min-width: 800px;">
                    
                    <div class="grid-x grid-margin-x">
                      <?php if ($session->UserMode == 'admin') { ?>
                      <div class="cell small-8 large-10"><h1>پیمان‌های شما</h1></div>
                      <div class="cell small-4 large-2"><a href="<?php echo $url; ?>contract_add" class="button success expanded"><i class="fal fa-plus fa-fw"></i> افزودن پیمان جدید</a></div>
                      <?php }else{ ?>
                        <div class="cell small-12 large-12"><h1>پیمان‌های شما</h1></div>
                      <?php } ?>
                    </div>

                    <table class="table hover">
                      <thead>
                        <tr>
                          <th width="50">ردیف</th>
                          <th>پروژه</th>
                          <th>کد پیمان</th>
                          <th>عنوان پیمان</th>
                          <th>نوع بودجه</th>
                          <th width="150">فهرست بهای مبنا</th>
                          <th width="150">تاریخ ثبت</th>
                          <th width="150">ضریب فصلی</th>
                          <th width="150">عملیات</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $key => $value) {  ?>
                        <tr>
                          <td><?php echo $key+1; ?></td>
                          <td><?php echo $value['project_id']; ?></td>
                          <td><?php echo $value['id']; ?></td>
                          <td><?php echo $value['title']; ?></td>
                          <td>عمرانی</td>
                          <td>۹۸</td>
                          <td><?php echo $value['date_reg']; ?></td>
                          <td><?php echo $value['zarib_fasli']==1?'بله':'خیر'; ?></td>
                          <td>
                            <button class="button small" type="button" data-toggle="menu_<?php echo $key; ?>">
                              <i class="fal fa-chevron-down"></i> عملیات
                            </button>
                            <div class="dropdown-pane" id="menu_<?php echo $key; ?>" data-dropdown 
                              data-position="bottom" data-alignment="right" data-hover="true" data-hover-pane="true">
                              <ul class="no-bullet">
                                <li><a class="inactive" href="<?php echo $url; ?>multipliers/index/<?php echo $value['id']; ?>"><i class="fal fa-fw fa-file"></i> ضریب‌ها</a></li>
                                <li><a class="inactive" href="<?php echo $url; ?>contract_change_mode/<?php echo $value['id']; ?>"><i class="fal fa-fw fa-file"></i> تغییر محاسبه ضریب فصل</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>


<!-- 
<td><span class="badge alert">معلق</span></td>
<td><span class="badge warning">بازگشت</span></td>
<td><span class="badge success">تایید شده</span></td>
<td><span class="badge">پایان یافته</span></td>
 -->