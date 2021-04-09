@push('css')
<link href="{{ asset('pages/dist/css/dashboard/data-table.css') }}" rel="stylesheet">
@endpush


<!-- ============================================================== -->
<!-- Container fluid scss in scaffolding.scss -->
<!-- ============================================================== -->
<div class="row">
    <div class="col l8 s12">
        <div class="card">
            <div class="card-content">
                <div class="d-flex no-block align-items-center">
                    <h5 class="card-title">All Technicians</h5>
                    <div class="ml-auto">
                        <a class="waves-effect waves-light btn blue-grey darken-4 modal-trigger" href="#modal2">Create New Contact</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="file_export" class="table table-bordered nowrap display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Joining date</th>
                                <th>Assessment Score</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technicians as $technician)
                            <tr>
                                <td>
                                    <a href="{{ route('technician.show',['technician'=>$technician->slug]) }}">
                                        <img src="{{ asset('pages/assets/images/users/1.jpg') }}" alt="user" class="circle" width="30px" />
                                        {{ ucwords($technician->name) }}
                                    </a>
                                </td>
                                <td>{{ $technician->email }}</td>
                                <td>{{ ucwords($technician->getRoleNames()->first() )}}</td>
                                <td>{{ $technician->created_at }}</td>
                                <td>{{ $technician->assessmentScore() }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn red" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    <a href="{{ route('technician.assessment.show.score',['technician'=>$technician->slug]) }}" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Assessment Score">
                                        <i class="ti-eye" aria-hidden="true"></i> Score
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col l4 s12">
        <div class="card">
            <div class="card-content">
                <a href="#modal1" class="waves-effect waves-light btn indigo modal-trigger" style="width: 100%;"><i class="fas fa-share-alt-square m-r-10"></i>Share With</a>
            </div>
            <div class="divider"></div>
            <div class="card-content">
                <div class="row">
                    <form class="col s12">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Search Contact Here</label>
                        </div>
                    </form>
                </div>
                <div class="collection">
                    <a href="#!" class="collection-item active indigo"><i class="ti-layers m-r-10"></i>All Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-star m-r-10"></i>Favourite Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-bookmark m-r-10"></i>Recently Created</a>
                </div>
                <h5 class="card-title m-t-30">Groups</h5>
                <div class="collection">
                    <a href="#!" class="collection-item"><i class="ti-flag-alt-2 m-r-10"></i>Success Warriers<span class="new badge red">40</span></a>
                    <a href="#!" class="collection-item"><i class="ti-notepad m-r-10"></i>Project<span class="new badge blue">14</span></a>
                    <a href="#!" class="collection-item"><i class="ti-target m-r-10"></i>Envato Author<span class="new badge indigo">114</span></a>
                    <a href="#!" class="collection-item"><i class="ti-comments m-r-10"></i>IT Friends<span class="new badge red">120</span></a>
                </div>
                <h5 class="card-title m-t-30">More</h5>
                <div class="collection">
                    <a href="#!" class="collection-item"><i class="ti-import m-r-10"></i>Import Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-export m-r-10"></i>Export Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-share-alt m-r-10"></i>Restore Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-layers-alt m-r-10"></i>Duplicate Contacts</a>
                    <a href="#!" class="collection-item"><i class="ti-trash m-r-10"></i>Delete All Contacts</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Share Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5 class="card-title"><i class="material-icons m-r-10">share</i>Share With</h5>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s9">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefi2" type="text" class="validate">
                        <label for="icon_prefi2">Enter Name Here</label>
                    </div>
                </div>
            </form>
            <div class="col s3 center-align">
                <a href="#Whatsapp">
                    <i class="display-6 fab fa-whatsapp green-text"></i>
                    <h6 class="m-t-15">Whatsapp</h6>
                </a>
            </div>
            <div class="col s3 center-align">
                <a href="#Facebook">
                    <i class="display-6 fab fa-facebook-f blue-text"></i>
                    <h6 class="m-t-15">Facebook</h6>
                </a>
            </div>
            <div class="col s3 center-align">
                <a href="#Instagram">
                    <i class="display-6 fab fa-instagram red-text"></i>
                    <h6 class="m-t-15">Instagram</h6>
                </a>
            </div>
            <div class="col s3 center-align">
                <a href="#Skype">
                    <i class="display-6 fab fa-skype"></i>
                    <h6 class="m-t-15">Skype</h6>
                </a>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text"><i class="fas fa-share"></i> Send</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat grey darken-4 white-text">Cancel</a>
        </div>
    </div>
</div>
<!-- Create Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h5 class="card-title"> <i class="fas fa-phone-square m-r-10"></i>New Contact</h5>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s9">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Enter Name Here</label>
                    </div>
                    <div class="input-field col s9">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telephone</label>
                    </div>
                    <div class="file-field input-field col s9">
                        <div class="btn indigo">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat indigo white-text"><i class="far fa-save m-r-10"></i> Save Contact</a>
    </div>
</div>



@push('js')
<!-- This page plugin js -->
<!-- ============================================================== -->
<script src="{{ asset('pages/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script>
    //=============================================//
    //    File export                              //
    //=============================================//
    $('#file_export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>
@endpush
