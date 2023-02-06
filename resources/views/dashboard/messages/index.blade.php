@extends('dashboard.layouts.app')
@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Requested Messages</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Requested Messages</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive mt-20">
                    <table class="table center-aligned-table">
                        <thead>
                        <tr class="text-dark">
                            <th>Member</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone </th>
                            <th>Position </th>
                            <th>Type </th>
                            <th>  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/05.jpg" alt=""> </td>
                            <td>Felica Queen</td>
                            <td>felica@gmail.com</td>
                            <td>456-995-4584</td>
                            <td>
                                <span class="text-warning">Graphic Designer </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-warning"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/06.jpg" alt=""> </td>
                            <td>John Doe</td>
                            <td>doe@gmail.com</td>
                            <td>566-564-5646</td>
                            <td>
                                <span class="text-danger">Developer </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-danger"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/07.jpg" alt=""> </td>
                            <td>Alice Williams</td>
                            <td>alicewilliams@gmail.com</td>
                            <td>654-672-5649</td>
                            <td>
                                <span class="text-success">Project Manager  </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-success"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/08.jpg" alt=""> </td>
                            <td>Paul Flavius</td>
                            <td>paulflavius@gmail.com</td>
                            <td>623-659-4894</td>
                            <td>
                                <span class="text-dark">Illustration</span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-dark"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/09.jpg" alt=""> </td>
                            <td>Michael Bean</td>
                            <td>michaelbean@gmail.com</td>
                            <td>156-483-4546</td>
                            <td>
                                <span class="text-info">Community </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-info"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/10.jpg" alt=""> </td>
                            <td>Sara Lisbon</td>
                            <td>saralisbon@gmail.com</td>
                            <td>466-489-4613</td>
                            <td>
                                <span class="text-warning">Support </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-warning"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/11.jpg" alt=""> </td>
                            <td>Anne Smith</td>
                            <td>annesmith@gmail.com</td>
                            <td>548-656-4563</td>
                            <td>
                                <span class="text-danger">Marketing </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-danger"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/12.jpg" alt=""> </td>
                            <td>Mellissa Doe</td>
                            <td>mellissadoe@gmail.com</td>
                            <td>456-456-4561</td>
                            <td>
                                <span class="text-success">CEO </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-success"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/13.jpg" alt=""> </td>
                            <td>Joana williams</td>
                            <td>joanawilliams@gmail.com</td>
                            <td>489-145-4563</td>
                            <td>
                                <span class="text-info">CTO </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-info"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/14.jpg" alt=""> </td>
                            <td>Michael Bean</td>
                            <td>michaelbean@gmail.com</td>
                            <td>466-469-4563</td>
                            <td>
                                <span class="text-dark">Project Manager </span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-dark"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td> <img class="img-fluid avatar-small" src="images/team/02.jpg" alt=""> </td>
                            <td>Paul Flavius</td>
                            <td>paulflavius@gmail.com</td>
                            <td>498-494-4663</td>
                            <td>
                                <span class="text-warning">Support</span>
                            </td>
                            <td>
                                <b><i class="pe-2 fa fa-circle text-warning"></i> Friends</b>
                            </td>
                            <td><a class="pe-2" href="#"> <i class="fa fa-pencil"></i></a> <a href="#"> <i class="fa fa-trash-o text-danger"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sm-mt-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
