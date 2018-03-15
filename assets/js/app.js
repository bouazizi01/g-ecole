$(document).ready(function () {

	
	$('#myModalDelete').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var id = button.data('id')
		var fullname = button.data('fullname')
		var modal = $(this)
		modal.find('#dispaly_messsage').text(modal.find('#dispaly_messsage').text()+" "+fullname)
		modal.find('#hidden_id').val(id)
	})



	$('#myModalUpdate').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var id = button.data('id')
		var modal = $(this)
		$.post("http://localhost/Supemir/index.php/Admin/Etudiant/"+id,{},function(data){
			modal.find('#nom').val(data.nom)
			modal.find('#id_et').val(data.id)
			modal.find('#prenom').val(data.prenom)
			modal.find('#tel').val(data.tel)
			modal.find('#email').val(data.email)
			modal.find('#matricule').val(data.matricule)
			modal.find('#niveau').val(data.niveau)
			modal.find('#role').val(data.role)
			modal.find('#image_et').attr('src',modal.find('#image_et').attr('src')+data.photo)
			console.log(data)
		},'json')
	})





	$("#addEtudiant").click(function(event){
		var modal=$("#myModal")
		var formData = new FormData();
		var fileInputElement=document.getElementById('img_file').files[0]
		formData.append("nom", modal.find("#nom").val())
		formData.append("prenom", modal.find("#prenom").val())
		formData.append("tel", modal.find("#tel").val())
		formData.append("email", modal.find("#email").val())
		formData.append("matricule", modal.find("#matricule").val())
		formData.append("niveau", modal.find("#niveau").val())
		formData.append("img", fileInputElement)
		$.ajax({
			url:"http://localhost/Supemir/index.php/Admin/AddEtudiant",
			type :"POST",
			processData: false,
			contentType: false,
			data :formData,
			success:function(data, textStatus, jqXHR){
				$('#myModal').modal('hide')
				$('#myModalValidateAdd').modal('show')
			},
			error: function(jqXHR, textStatus, errorThrown){
				modal.find("#error_message").removeClass("hide")
			}     
		})
	})






// Professeurs
$("#addProf").click(function(event){
	var modal=$("#ModalAddProf")
	var formData = new FormData();
	var fileInputElement=document.getElementById('img_file').files[0]
	formData.append("nom", modal.find("#nom").val())
	formData.append("prenom", modal.find("#prenom").val())
	formData.append("tel", modal.find("#tel").val())
	formData.append("email", modal.find("#email").val())
	formData.append("matricule", modal.find("#matricule").val())
	formData.append("modules", modal.find("#modules").val())
	formData.append("img", fileInputElement)

	$.ajax({
		url:"http://localhost/Supemir/index.php/Admin/AddProf",
		type :"POST",
		processData: false,
		contentType: false,
		data :formData,
		success:function(data, textStatus, jqXHR){
			$('#ModalAddProf').modal('hide')
			$('#myModalValidateAdd').modal('show')
		},
		error: function(jqXHR, textStatus, errorThrown){
			modal.find("#error_message").removeClass("hide")
		}     
	})
})


$("#myModal input,#myModal select").focus(function (event) {
	$("#error_message").addClass("hide")
})


$('#myModalUpdateProf').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var id = button.data('id')
	var modal = $(this)
	$.post("http://localhost/Supemir/index.php/Admin/Etudiant/"+id,{},function(data){
		modal.find('#nom').val(data.nom)
		modal.find('#id_et').val(data.id)
		modal.find('#prenom').val(data.prenom)
		modal.find('#tel').val(data.tel)
		modal.find('#email').val(data.email)
		modal.find('#matricule').val(data.matricule)
		modal.find('#modules').val(data.modules)
		modal.find('#image_et').attr('src',modal.find('#image_et').attr('src')+data.photo)
		console.log(data)
	},'json')
})





$('#myModalUpdateMyFile').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var id = button.data('id')
	var modal = $(this)

	$.post("http://localhost/Supemir/index.php/Etudiant/getMyFilesById/"+id,{},function(data){

		modal.find('#nom').val(data.nom)
		modal.find('#id').val(data.id)
		modal.find('#prenom').val(data.prenom)
		modal.find('#cne').val(data.cne)
		modal.find('#filiere').val(data.filiere)
		modal.find('#type').val(data.type)
	},'json')
})





$('#myModalUpdateFile').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var id = button.data('id')
	var modal = $(this)

	$.post("http://localhost/Supemir/index.php/Admin/getMyFilesById/"+id,{},function(data){

		modal.find('#nom').val(data.nom)
		modal.find('#id').val(data.id)
		modal.find('#prenom').val(data.prenom)
		modal.find('#cne').val(data.cne)
		modal.find('#filiere').val(data.filiere)
		modal.find('#type').val(data.type)
		modal.find('#niveau').val(data.niveau+' ème année')
	},'json')
})











$("#addUser").click(function(event){
	var modal=$("#ModalInscription")
	var formData = new FormData();
	var fileInputElement=document.getElementById('img_file').files[0]
	formData.append("nom", modal.find("#nom").val())
	formData.append("prenom", modal.find("#prenom").val())
	formData.append("tel", modal.find("#tel").val())
	formData.append("email", modal.find("#email").val())
	formData.append("matricule", modal.find("#matricule").val())
	formData.append("role", modal.find("#role").val())
	formData.append("modules", modal.find("#modules").val())
	formData.append("niveau", modal.find("#niveau").val())
	formData.append("img", fileInputElement)
	$.ajax({
		url:"http://localhost/Supemir/index.php/User/addUser",
		type :"POST",
		processData: false,
		contentType: false,
		data :formData,
		success:function(data, textStatus, jqXHR){
			$('#ModalInscription').modal('hide')
			$('#myModalValidateAdd').modal('show')
		},
		error: function(jqXHR, textStatus, errorThrown){
			modal.find("#error_message").removeClass("hide")
		}     
	})
})










})