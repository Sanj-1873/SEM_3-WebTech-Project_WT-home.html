 <?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "Politic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "INSERT INTO `dataset_Candidates` VALUES ('Karnataka','dig','Congress','BS Yedyurappa','Siddaramaiah','ka_p1.jpg','ka_p2.jpg'),('West Bengal','TMC','BJP','Mamata Baneerjee','Mukul Roy','wb_p1.jpg','wb_p2.jpg'),('Uttar Pradesh','SP','BJP','Akhilesh Yadav','Yogi Adityanath','up_p1.jpg','up_p2.jpg'),('Kerela','CPI(M)','Congress','Stalin','Ramesh Chennithala','kl_p1.jpg','kl_p2.jpg'),('Andhra Pradesh','YSR Congress','TDP','YSJ Reddy','Chandrababu Naidu','ap_p1.jpg','ap_p2.jpg'),('Bihar','JDS','RJD','Nitish Kumar','Tejasvi Yadav','bh_p1.jpg','bh_p2.jpg'),('New Delhi','AAP','BJP','Arvind Kejriwal','Harsh Vardhan','dl_p1.jpg','dl_p2.jpg'),('Rajasthan','Congress','BJP','Sachin Pilot','Vasundhara Raje','rj_p1.jpg','rj_p2.jpg'),('Punjab','Congress','Shiromani Akali Dal','Captain Amarinder Singh','Sukhbir Singh Badal','pb_p1.jpg','pb_p2.jpg'),('Goa','Congress','BJP','Digambar Kamat','Pramod Sawant','goa_p1.jpg','goa_p2.jpg'),('Maharashtra','BJP','Shivsena','Devendra Fadnavis','Udhav Thakre','mh_p1.jpg','mh_p2.jpg'),('Jammu and Kashmir','Jammu and Kashmir National Conference','PDP','Omar Abdullah','Mehbooba Mufti','jk_p1.jpg','jk_p2.jpg'),('Orissa','BJD','BJP','Naveen Pathnaik','Pradipta Nayak','orr_p1.jpg','orr_p2.jpg'),('Madhya Pradesh','BJP','Congress','Shivraj Singh Chauhan','Kamal Nath','mp_p1.jpg','mp_p2.jpg'),('Tamil Nadu','AIADMK','DMK','O Pannerselvam','Kanimozhi','tn_p1.jpg','tn_p2.jpg'),('Gujrat','BJP','Congress','Vijay Rupani','Paresh Dhanani','gj_p1.jpg','gj_p2.jpg'),('Telangana','TRS','TDP','Chandrashekhar Rao','Chandrababu Naidu','tg_p1.jpg','tg_p2.jpg'),('Assam','Congress','BJP','Tarun Gogoi','Sarbananda Sonowal','as_p1.jpg','as_p2.jpg'),('Arunachal Pradesh','BJP','Congress','Pema Khandu','Nabam Tuki','arp_p1.jpg','aru_p2.jpg'),('Meghalaya','Congress','United Democratic Party','Mukul Sangma','Donkupar Roy','mg_p1.jpg','mg_p2.jpg'),('Chhattisgarh','Congress','BJP','Bhupesh Baghel','Dharamlal Kaushik','cg_p1.jpg','cg_p2.jpg'),('Mizoram','MNF','ZPM','Zoramthanga','Lalduhawma','mz_p1.jpg','mz_p2.jpg'),('Sikkim','SKM','SDF','Prem Singh Tamang','Pawan Kumar Chamling','sk_p1.jpg','sk_p2.jpg'),('Jharkhand','BJP','JMM','Raghubar Das','Hemant Soren','jh_p1.jpg','jh_p2.jpg'),('Manipur','BJP','Congress','N. Biren Singh','Okram Ibobi Singh','mni_p1.jpg','mni_p2.jpg'),('Nagaland','NDPP','NPF','Neiphiu Rio','T.R.Zeliang','ng_p1.jpg','ng_p2.jpg'),('Uttarakhand','BJP','Congress','Premchand Aggarwal','Indira Hridayesh','ut_p1.jpg','ut_p2.jpg'),('Haryana','BJP','Congress','Manohar Lal Khattar','Bhupinder Singh Hooda','hr_p1.jpg','hr_p2.jpg'),('Himachal Pradesh','BJP','Congress','Jai Ram Thakur','Mukesh Agnihotri','hp_p1.jpg','hp_p2.jpg'),('Andaman and Nicobar Islands','Congress','BJP','Kuldeep Rai Sharma','Vishal Jolly','an_p1.jpg','ann_p2.jpg');";

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$sql2 = "INSERT INTO `dataset_Candidates` VALUES ('Karnataka','dig','Congress','BS Yedyurappa','Siddaramaiah','ka_p1.jpg','ka_p2.jpg'),('West Bengal','TMC','BJP','Mamata Baneerjee','Mukul Roy','wb_p1.jpg','wb_p2.jpg'),('Uttar Pradesh','SP','BJP','Akhilesh Yadav','Yogi Adityanath','up_p1.jpg','up_p2.jpg'),('Kerela','CPI(M)','Congress','Stalin','Ramesh Chennithala','kl_p1.jpg','kl_p2.jpg'),('Andhra Pradesh','YSR Congress','TDP','YSJ Reddy','Chandrababu Naidu','ap_p1.jpg','ap_p2.jpg'),('Bihar','JDS','RJD','Nitish Kumar','Tejasvi Yadav','bh_p1.jpg','bh_p2.jpg'),('New Delhi','AAP','BJP','Arvind Kejriwal','Harsh Vardhan','dl_p1.jpg','dl_p2.jpg'),('Rajasthan','Congress','BJP','Sachin Pilot','Vasundhara Raje','rj_p1.jpg','rj_p2.jpg'),('Punjab','Congress','Shiromani Akali Dal','Captain Amarinder Singh','Sukhbir Singh Badal','pb_p1.jpg','pb_p2.jpg'),('Goa','Congress','BJP','Digambar Kamat','Pramod Sawant','goa_p1.jpg','goa_p2.jpg'),('Maharashtra','BJP','Shivsena','Devendra Fadnavis','Udhav Thakre','mh_p1.jpg','mh_p2.jpg'),('Jammu and Kashmir','Jammu and Kashmir National Conference','PDP','Omar Abdullah','Mehbooba Mufti','jk_p1.jpg','jk_p2.jpg'),('Orissa','BJD','BJP','Naveen Pathnaik','Pradipta Nayak','orr_p1.jpg','orr_p2.jpg'),('Madhya Pradesh','BJP','Congress','Shivraj Singh Chauhan','Kamal Nath','mp_p1.jpg','mp_p2.jpg'),('Tamil Nadu','AIADMK','DMK','O Pannerselvam','Kanimozhi','tn_p1.jpg','tn_p2.jpg'),('Gujrat','BJP','Congress','Vijay Rupani','Paresh Dhanani','gj_p1.jpg','gj_p2.jpg'),('Telangana','TRS','TDP','Chandrashekhar Rao','Chandrababu Naidu','tg_p1.jpg','tg_p2.jpg'),('Assam','Congress','BJP','Tarun Gogoi','Sarbananda Sonowal','as_p1.jpg','as_p2.jpg'),('Arunachal Pradesh','BJP','Congress','Pema Khandu','Nabam Tuki','arp_p1.jpg','aru_p2.jpg'),('Meghalaya','Congress','United Democratic Party','Mukul Sangma','Donkupar Roy','mg_p1.jpg','mg_p2.jpg'),('Chhattisgarh','Congress','BJP','Bhupesh Baghel','Dharamlal Kaushik','cg_p1.jpg','cg_p2.jpg'),('Mizoram','MNF','ZPM','Zoramthanga','Lalduhawma','mz_p1.jpg','mz_p2.jpg'),('Sikkim','SKM','SDF','Prem Singh Tamang','Pawan Kumar Chamling','sk_p1.jpg','sk_p2.jpg'),('Jharkhand','BJP','JMM','Raghubar Das','Hemant Soren','jh_p1.jpg','jh_p2.jpg'),('Manipur','BJP','Congress','N. Biren Singh','Okram Ibobi Singh','mni_p1.jpg','mni_p2.jpg'),('Nagaland','NDPP','NPF','Neiphiu Rio','T.R.Zeliang','ng_p1.jpg','ng_p2.jpg'),('Uttarakhand','BJP','Congress','Premchand Aggarwal','Indira Hridayesh','ut_p1.jpg','ut_p2.jpg'),('Haryana','BJP','Congress','Manohar Lal Khattar','Bhupinder Singh Hooda','hr_p1.jpg','hr_p2.jpg'),('Himachal Pradesh','BJP','Congress','Jai Ram Thakur','Mukesh Agnihotri','hp_p1.jpg','hp_p2.jpg'),('Andaman and Nicobar Islands','Congress','BJP','Kuldeep Rai Sharma','Vishal Jolly','an_p1.jpg','ann_p2.jpg');
";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$sql3 = "INSERT INTO `dataset_HistoryAgriculture` VALUES ('Karnataka',19.0,1.0,7.0,9.0,11.0),('West Bengal',2.0,11.0,2.0,2.0,14.0),('Uttar Pradesh',13.0,13.0,9.0,12.0,1.0),('Kerela',10.0,9.0,11.0,14.0,6.0),('Andhra Pradesh',11.0,10.0,14.0,2.0,3.0),('Bihar',7.0,4.0,14.0,7.0,13.0),('New Delhi',1.0,5.0,17.0,7.0,16.0),('Rajasthan',18.0,1.0,18.0,5.0,7.0),('Punjab',18.0,15.0,13.0,2.0,18.0),('Goa',8.0,7.0,1.0,11.0,7.0),('Maharashtra',9.0,1.0,16.0,19.0,19.0),('Jammu and Kashmir',14.0,2.0,1.0,12.0,8.0),('Orissa',7.0,1.0,6.0,11.0,17.0),('Madhya Pradesh',3.0,19.0,3.0,19.0,18.0),('Tamil Nadu',6.0,7.0,9.0,6.0,7.0),('Gujrat',2.0,5.0,19.0,7.0,8.0),('Telangana',10.0,15.0,15.0,16.0,9.0),('Assam',16.0,1.0,10.0,8.0,5.0),('Arunachal Pradesh',7.0,10.0,2.0,14.0,8.0),('Meghalaya',7.0,17.0,3.0,14.0,18.0),('Chhattisgarh',2.0,6.0,7.0,16.0,13.0),('Mizoram',1.0,2.0,11.0,10.0,19.0),('Sikkim',7.0,5.0,7.0,10.0,11.0),('Jharkhand',16.0,9.0,13.0,15.0,15.0),('Manipur',15.0,19.0,9.0,12.0,6.0),('Nagaland',10.0,12.0,14.0,11.0,11.0),('Uttarakhand',10.0,3.0,4.0,8.0,18.0),('Haryana',8.0,16.0,7.0,15.0,19.0),('Himachal Pradesh',14.0,10.0,1.0,8.0,18.0),('Andaman and Nicobar Islands',3.0,10.0,19.0,3.0,19.0);
";

if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}

$sql4 = "INSERT INTO `dataset_HistoryHome` VALUES ('Karnataka',3.0,5.0,13.0,8.0,5.0),('West Bengal',1.0,11.0,1.0,8.0,19.0),('Uttar Pradesh',7.0,18.0,10.0,2.0,13.0),('Kerela',2.0,13.0,11.0,13.0,11.0),('Andhra Pradesh',15.0,4.0,17.0,13.0,8.0),('Bihar',18.0,5.0,8.0,8.0,13.0),('New Delhi',8.0,15.0,7.0,11.0,19.0),('Rajasthan',16.0,2.0,13.0,12.0,2.0),('Punjab',1.0,3.0,15.0,10.0,1.0),('Goa',13.0,3.0,7.0,18.0,11.0),('Maharashtra',16.0,5.0,15.0,3.0,1.0),('Jammu and Kashmir',10.0,11.0,15.0,15.0,3.0),('Orissa',2.0,14.0,9.0,3.0,7.0),('Madhya Pradesh',12.0,8.0,13.0,14.0,17.0),('Tamil Nadu',7.0,6.0,17.0,9.0,19.0),('Gujrat',10.0,10.0,17.0,16.0,6.0),('Telangana',8.0,19.0,1.0,8.0,13.0),('Assam',5.0,16.0,9.0,9.0,8.0),('Arunachal Pradesh',7.0,1.0,4.0,18.0,11.0),('Meghalaya',13.0,14.0,2.0,4.0,3.0),('Chhattisgarh',7.0,15.0,3.0,6.0,18.0),('Mizoram',6.0,7.0,13.0,2.0,2.0),('Sikkim',15.0,14.0,9.0,8.0,14.0),('Jharkhand',4.0,7.0,18.0,18.0,15.0),('Manipur',15.0,6.0,18.0,13.0,11.0),('Nagaland',11.0,5.0,17.0,15.0,15.0),('Uttarakhand',5.0,18.0,10.0,5.0,8.0),('Haryana',14.0,8.0,13.0,12.0,4.0),('Himachal Pradesh',7.0,8.0,13.0,10.0,1.0),('Andaman and Nicobar Islands',11.0,11.0,8.0,2.0,11.0);";

if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}

$sql5 = "INSERT INTO `dataset_Party` VALUES ('AAP',17.0,6.0,3.0,4.0,17.0,13.0,4.0),('AIADMK',5.0,1.0,7.0,8.0,4.0,11.0,16.0),('BJD',15.0,3.0,9.0,10.0,15.0,8.0,2.0),('BJP',8.0,2.0,5.0,18.0,7.0,14.0,12.0),('Congress',2.0,16.0,8.0,13.0,5.0,8.0,9.0),('CPI(M)',17.0,19.0,14.0,17.0,18.0,12.0,16.0),('dig',16.0,17.0,3.0,19.0,3.0,3.0,13.0),('DMK',8.0,9.0,13.0,8.0,16.0,9.0,16.0),('Jammu and Kashmir National Conference',3.0,14.0,10.0,17.0,19.0,2.0,9.0),('JDS',13.0,11.0,1.0,13.0,6.0,7.0,12.0),('JMM',2.0,5.0,14.0,7.0,8.0,13.0,15.0),('MNF',16.0,8.0,4.0,7.0,17.0,10.0,11.0),('NDPP',19.0,3.0,8.0,9.0,10.0,13.0,6.0),('NPF',4.0,6.0,4.0,10.0,8.0,9.0,6.0),('PDP',2.0,13.0,10.0,8.0,5.0,3.0,1.0),('RJD',9.0,13.0,6.0,2.0,16.0,10.0,2.0),('SDF',14.0,6.0,12.0,1.0,1.0,14.0,14.0),('Shiromani Akali Dal',19.0,15.0,2.0,6.0,1.0,1.0,18.0),('Shivsena',16.0,14.0,8.0,3.0,15.0,4.0,10.0),('SKM',9.0,6.0,13.0,3.0,18.0,10.0,19.0),('SP',10.0,11.0,14.0,18.0,11.0,7.0,16.0),('TDP',17.0,4.0,19.0,1.0,18.0,10.0,2.0),('TMC',5.0,17.0,18.0,15.0,10.0,14.0,3.0),('TRS',17.0,13.0,14.0,1.0,18.0,18.0,6.0),('United Democratic Party',13.0,14.0,1.0,12.0,8.0,5.0,3.0),('YSR Congress',15.0,10.0,6.0,4.0,8.0,1.0,2.0),('ZPM',5.0,15.0,19.0,10.0,16.0,3.0,12.0);";

if ($conn->query($sql5) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
}

$conn->close();
?> 