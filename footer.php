<script>
    function more() {
        alert('Log Out To Read More...');
    }
    function contact() {
        alert('You Can Reach Us Via\n Email: info@mycentonline.com\n Address: Grønjordsvej 10 PO Box 850 0900 Copenhagen C, Denmark');
    }
</script>
 <div id="footer">
    <div id="sub_footer">
        <div class="footer_up">
            <div class="footer_left">
                <div class="fo_logo zoomIn animated wow"data-wow-duration="2s">
                   <a href="dashboard.php"><img src="images/fologo.png"/></a> 
                </div>
                <div class="reserved">
                    <p>&copy; Copyright  1960 - 20<?php echo date('y');  ?> Cent Bank Plc...</p>
                </div>
            </div>
            <div class="footer_right">
                <div class="fo-menu">
					<ul style="cursor: pointer">
	<li><a href="dashboard.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> home</a></li>
	<li><a onclick="more()"><i class="fa fa-angle-double-right" aria-hidden="true"></i> about us</a></li>
	<li><a onclick="more()"><i class="fa fa-angle-double-right" aria-hidden="true"></i> post</a></li>
	<li><a onclick="more()"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  Products</a></li>
	<li><a onclick="more()"><i class="fa fa-angle-double-right" aria-hidden="true"></i> our terms</a></li>
	<li><a onclick="contact()"><i class="fa fa-angle-double-right" aria-hidden="true"></i> support</a></li>
					</ul>
				</div>
                <div class="footer_contact">
                    <div class="footer_contact_one">
                        <div class="contct_icon">
                            <img src="images/support.png"/>
                        </div>
                        <div class="contact_text">
                            <?php
                                if ($row['admin_id']==1) {
                                    echo "<p>help@cent-online.com</p>";
                                }
                                else if($row['admin_id']==4){
                                    echo "<p>support@cent-online.com </p>";
                                }
                                else if($row['admin_id']==5){
                                    echo "<p>care@cent-online.com </p>";
                                }
                                else if($row['admin_id']==4){
                                    echo "<p>info@cent-online.com </p>";
                                }
                                else if($row['admin_id']==7){
                                    echo "<p>message@cent-online.com </p>";
                                }
                                else if($row['admin_id']==8){
                                    echo "<p>helpdesk@cent-online.com </p>";
                                }
                                else {
                                    echo "<p>info@mycentonline.com </p>";
                                }
                                
                            ?>
                            
                        </div>
                    </div>
                    <div class="footer_contact_one_">
                        <div class="contct_icon">
                            <img src="images/loc.png"/>
                        </div>
                        <div class="contact_text">
                            <p>Grønjordsvej 10 PO Box 850 0900 Copenhagen C,  
Denmark
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="payment">
            <ul>
                <li><img class="zoomIn animated wow"data-wow-duration="2s" src="images/perfect.png" height=""></li>
                <li><img class="zoomIn animated wow"data-wow-duration="3s" src="images/payeer.png" height=""></li>
                <li><img class="zoomIn animated wow"data-wow-duration="4s" src="images/bitcoin.png" height=""></li>
                <li><img class="zoomIn animated wow"data-wow-duration="5s" src="images/ddos.png" height=""></li>
                <li><img class="zoomIn animated wow"data-wow-duration="6s" src="images/comodo.png" height=""></li>
            </ul>
        </div>
        
        
    </div>
</div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e79d14d69e9320caabc5f7e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
