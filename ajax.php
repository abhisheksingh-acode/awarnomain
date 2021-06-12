<?php

 $val = $_GET['country'];

 if(isset($_GET['country'])){

    if ($val == 'india') {
      $states = array("Andhra Pradesh",
      "Arunachal Pradesh",
      "Assam",
      "Bihar",
      "Chhattisgarh",
      "Goa",
      "Gujarat",
      "Haryana",
      "Himachal Pradesh",
      "Jammu and Kashmir",
      "Jharkhand",
      "Karnataka",
      "Kerala",
      "Madhya Pradesh",
      "Maharashtra",
      "Manipur",
      "Meghalaya",
      "Mizoram",
      "Nagaland",
      "Odisha",
      "Punjab",
      "Rajasthan",
      "Sikkim",
      "Tamil Nadu",
      "Telangana",
      "Tripura",
      "Uttarakhand",
      "Uttar Pradesh",
      "West Bengal",
      "Andaman and Nicobar Islands",
      "Chandigarh",
      "Dadra and Nagar Haveli",
      "Daman and Diu",
      "Delhi",
      "Lakshadweep",
      "Puducherry"); 
     
      echo ' <option value="select">Select State</option>';
       foreach($states  as $sub){
     ?>
        <option value="<?php echo $sub ;?>">
           <?php echo $sub ;?>
        </option>
        <?php  }  
    }else{
      
      echo '<option value="empty">empty</option>'  ;
    }
     
 }else{
    echo '<option value="empty">empty</option>';
 }

 ?>