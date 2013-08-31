<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> 

    <head>
    <script language="javascript" type="text/javascript">        
         function imgSlider (albumID) {
              Galleria.loadTheme('<?=base_url("js/galleria/themes/classic/galleria.classic.min.js")?>');
              Galleria.run('#galleria', {       
              facebook: 'album:' +albumID, 
              width: 700, 
              height: parseInt($('#gallery').css('height')), 
              wait: true,
              lightbox: false,
              facebookOptions: {max: 100}
              });
              
              Galleria.ready(function() {
              var gallery = this;
              this.addElement('fscr').appendChild('container','fscr');
              var btn = this.$('fscr').css('cursor','pointer').text('Close').click(function(e) {
                  gallery.destroy();
                
                  popup('galleria');});
              });
              popup('galleria'); 
         }
     </script>  
    </head>
    <body>  
    <div class="row">
        <div class="twelve columns">
            <section class="vertical tabs">
                <ul class="tab-nav three columns" >
                    <li class="active"><a href="#">ประวัติวิทยากร</a></li>
                    <li><a href="#">ประวัติการทำงาน</a></li>
                    <li><a href="#">ผลงานและการวิจัย</a></li>
                    <li><a href="#">ศึกษาดูงาน</a></li>
                </ul>
                <div class="tab-content nine columns active" >
                    <h3 class="push_one lead">ดร.อภิชัย กรมเมือง</h3>                
                    <h5>ตำแหน่ง ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษา </h5>
                    <article class="youtube video">
                        <iframe width="420" height="315" src="//www.youtube.com/embed/SlsTBBjymo8" 
                        frameborder="0" allowfullscreen></iframe>
                    </article>                       
                    <h5>การศึกษา</h5>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;ปริญญาตรี ศึกษาศาสตรบัณฑิต (ศษ.บ.เกียรตินิยมอันดับ 1)วิชาเอก การบริหารการศึกษา</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;ปริญญาโท   การศึกษามหาบัณฑิต (กศ.ม.)วิชาเอก  การบริหารการศึกษา </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;ปริญญาเอก  ครุศาสตรดุษฏีบัณฑิต (ค.ด.)วิชาเอก การบริหารการศึกษา  (ดุษฎีนิพนธ์ เรื่อง  การบริหารจัดการเครือข่ายโรงเรียนขนาดเล็ก  เพื่อพัฒนาคุณภาพการศึกษา) </p>
                </div>
                <div class="tab-content nine columns">
                    <h3 class="push_one lead">ประวัติการทำงาน</h3> 
                    <h5>ระดับตำแหน่งทางการศึกษา </h5>    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- ครูและศึกษานิเทศก์สังกัดองค์การบริหารส่วนจังหวัดอุบลราชธานี </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- หัวหน้าการประถมศึกษาจังหวัดนนทบุรี </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- ผู้ช่วยผู้อำนวยการการประถมศึกษาจังหวัดนนทบุรีและอุบลราชธานี</p>  
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- รองผู้อำนวยการสำนักงานเขตพื้นที่การศึกษาอุบลราชธานี เขต 1 </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- ผู้อำนวยการสำนักงานเขตพื้นที่การศึกษา ร้อยเอ็ดเขต 2 และยโสธร เขต 1 (ปัจจุบัน) </p>
                    <h5>การเป็นคณะกรรมการและคณะทำงานระดับชาติ </h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;วิทยากร ณ สถาบันพัฒนาครู และบุคลากรทางการศึกษา(วัดไร่ขิง) หลักสูตร </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- รองผู้อำนวยการสำนักงานเขตพื้นที่การศึกษา </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- หัวหน้าการประถมศึกษาอำเภอและผู้ช่วยหัวหน้าการประถมศึกษาอำเภอ </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ผู้บริหารสถานศึกษา </p>
                    <h5>การเป็นวิทยากรและอาจารย์พิเศษ </h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยราชภัฎอุบลราชธานี  </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยราชธานี  </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยราชภัฎสวนดุสิต  </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยรามคำแหง  </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยมหาสารคาม พ.ศ.2544 - ปัจจุบัน  </p>
                    <h5>เป็นที่ปรึกษาเป็นผู้เชี่ยวชาญการทำวิทยานิพนธ์และผู้ทรงคุณวุฒิ </h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- มหาวิทยาลัยราชภัฎอุบลราชธานี พ.ศ.2544 - ปัจจุบัน  </p>
                    <h5>เป็นผู้ทรงคุณวุฒิในเขตพื้นที่การศึกษา </h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เขตพื้นที่การศึกษานนทบุรี พ.ศ.2544 - 2546  </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เขตพื้นที่การศึกษาอุบลราชธานี เขต 1 </p>
                </div>
                <div class="tab-content nine columns">
                    <h3 class="push_one lead">ผลงานและการวิจัย</h3> 
                    <h5>ผลงาน </h5>   
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- บริหารจัดการศึกษาเขตพื้นที่การศึกษาอย่างมีประสิทธิภาพและประสิทธิผล ทำให้ผลสัมฤทธิ์ O-NET ระดับชั้นประถมศึกษาปีที่ 6 สูงขึ้นเป็นอันดับ 2 และอันดับ 1 ตามลำดับ (2553, 2554) </p>                                                
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- บริหารจัดการศึกษาเขตพื้นที่การศึกษาอย่างมีประสิทธิภาพและประสิทธิผล ทำให้ผลสัมฤทธิ์ NT ระดับชั้นประถมศึกษาปีที่ 3 สูงขึ้นเป็นอันดับ 2 และอันดับ 1 ตามลำดับ (2553, 2554, 2555) </p>                                                
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- โล่รางวัล Professional Person: บุคคลมืออาชีพประจำปี 2554 จากสำนักงานส่งเสริมสวัสดิการและสวัสดิภาพครูและบุคลากรทางการศึกษา</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- โล่รางวัลผู้บริหารการศึกษาขั้นพื้นฐานดีเด่นประจำปี 2545 จากรัฐมนตรีว่าการกระทรวงศึกษาธิการ </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เกียรติบัตร ผู้บริหารการศึกษาดีเด่น ประจำปี 2545 จากคุรุสภาจังหวัดอุบลราชธานี</p> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เครื่องหมายเชิดชูเกียรติ “คุรุสดุดี” และ “หนึ่งแสนครูดี” จาก คุรุสภา</p> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- รางวัลเหรียญทองการประกวดนวัตกรรมบุคลากรทางการศึกษา   จาก สพฐ.  ปี 2551 </p> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เกียรติบัตร “บุคคลดีเด่น”  คุรุสภาจังหวัดสุรินทร์ พ.ศ.2537 </p>            
                    
                    <br/><h5>งานวิจัยและการเขียนหนังสือ</h5> 
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- การศึกษาวิจัยเรื่อง การประเมินผลการจัดทำผลงานวิชาการของครูและบุคลากรทางการศึกษา </p>                                                
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- การศึกษาวิจัยเรื่องการบริหารจัดการงานวิชาการโรงเรียนขนาดเล็กที่มีประสิทธิภาพ(ได้รับทุน  
การวิจัยจากงบประมาณพัฒนาจังหวัด(CEO)อุบลราชธานี พ.ศ.2549)</p>                                                
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- กระบวนทรรศน์ผู้นำทางวิชาการยุคใหม่  พ.ศ. 2550</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- เส้นทางสู่ครูมืออาชีพ  พ.ศ. 2551</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;- คู่มือการบริหารจัดการการศึกษาขั้นพื้นฐาน พ.ศ. 2556</p>
                </div>
                <div class="tab-content nine columns">
                    <div class="row">
                    <h3 class="push_one lead">ศึกษาดูงาน</h3>
                    <div id="blanket" style="display:none"></div>
                    <div id="galleria" style="display:none"></div>
                    <?php   
                        foreach($jdata->data as $obj )
                        {
                            //get each album ID and Name   images.php?albumid=".$obj->id."&albumname=".$obj->name."
                            if (substr($obj->name, 0, 4) == 'work' or substr($obj->name, 0, 4) == 'port')  {
                                echo "<div class='FB_pic_container'>
                                        <a href='javascript:imgSlider(".$obj->id.", 2);' >
                                            <div style='width: 220px; height: 150px;'>
                                                <img src='https://graph.facebook.com/".$obj->id."/picture?type=album'/>
                                                <span class='FB_pic_label'>".substr($obj->name, 5)."</span>
                                            </div>
                                        </a>
                                    </div>";
                            }
                         }
                    ?>
                    </div>
                    
                     
                    
                </div>
                
 
                    
               
            </section>
        </div>
    </div>
    </body>
</html>