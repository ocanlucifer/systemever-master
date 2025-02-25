function setWithExpiry(key, value, ttl) {
	const now = new Date()
	const item = {
		value: value,
		expiry: now.getTime() + ttl,
	}
	localStorage.setItem(key, JSON.stringify(item))
}
function getWithExpiry(key) {
	const itemStr = localStorage.getItem(key)
	if (!itemStr) {
		return null
	}
	const item = JSON.parse(itemStr)
	const now = new Date()
	if (now.getTime() > item.expiry) {
		localStorage.removeItem(key)
		return null
	}
	return item.value
}
$("#checked-intro").click(function(){
    let hasOne = $(this).hasClass('mintro-close-checked');
    var ttl = 86400000;
    if(hasOne){
        $(this).removeClass('mintro-close-checked');
        setWithExpiry('intro','yes',ttl);
    }else{
        $(this).addClass('mintro-close-checked');
        setWithExpiry('intro','no',ttl);
    }
})

$("#close-intro").click(function(){
    $("#modal-intro").addClass('d-none');
});

function int_intro(image = null, link = null) {
    var local = getWithExpiry('intro');
    var ttl = 86400000;
    if(local != null){
        if(local == 'yes'){
            $("#modal-intro").removeClass('d-none');
            $("#mintro-image").attr("src",image);
            if (link != null) {
                $("#mintro-link").attr("href",link);
            }
        }else{
            $("#modal-intro").addClass('d-none');
        }
    }else{
        setWithExpiry('intro','yes',ttl)
        $("#mintro-image").attr("src",image);
        $("#modal-intro").removeClass('d-none');
    }
}

$("#select-notice").click(function(){
    let hasOne = $("#select-list-notice").hasClass('d-none');
    if(hasOne){
        $("#select-list-notice").removeClass('d-none');
        $("#na-icon").addClass("na-rotate")
    }else{
        $("#select-list-notice").addClass('d-none');
        $("#na-icon").removeClass("na-rotate")
    }
})
$('.na-select-value').on('click', function(){
    let id = $(this).data('id');
    let name = $(this).data('name');
    $("#na-name").text(name);
    $("#value-select-notice").val(id);
    $("#select-list-notice").addClass('d-none');
})