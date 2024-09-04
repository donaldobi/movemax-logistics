@if(session('error'))
    <div id="flashmessage" class="alert alert-danger alert-dismissible text-center" role="alert">
        <strong>{{ session('error') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="document.getElementById('flashmessage').style.display='none' ">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('success'))
    <div id="flashmessage" class="alert alert-success alert-dismissible text-center" role="alert">
        <strong> {{ session('success') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="document.getElementById('flashmessage').style.display='none' ">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif