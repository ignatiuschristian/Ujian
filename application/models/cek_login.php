if($cek > 0){
	$data_session = array(
		'nama' => $username,
		'status' => "login"
		);
 
	$this->session->set_userdata($data_session);
	redirect(base_url("admin"));
}else{
	echo "Username dan password salah !";
}