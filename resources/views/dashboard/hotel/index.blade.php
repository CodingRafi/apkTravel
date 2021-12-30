@extends('dashboard.layouts.main1')

@section('container')
    
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Basic Form Inputs</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Basic Inputs</h4>
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Simple Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Password input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Read only</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="You can't change me" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Disable Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Disabled text" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Predefine
                                                Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Enter yout content after me">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Select Box</label>
                                            <div class="col-sm-10">
                                                <select name="select" class="form-control">
                                                    <option value="opt1">Select One Value Only</option>
                                                    <option value="opt2">Type 2</option>
                                                    <option value="opt3">Type 3</option>
                                                    <option value="opt4">Type 4</option>
                                                    <option value="opt5">Type 5</option>
                                                    <option value="opt6">Type 6</option>
                                                    <option value="opt7">Type 7</option>
                                                    <option value="opt8">Type 8</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Round Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-round" placeholder=".form-control-round">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Maximum
                                                Length</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Disable
                                                Autocomplete</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Autocomplete Off" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Static Text</label>
                                            <div class="col-sm-10">
                                                <div class="form-control-static">Hello !... This is
                                                    static text
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Color</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload File</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="sub-title">Input Sizes</h4>
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder=".form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">Color Inputs</h4>
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-primary" placeholder=".form-control-primary">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-warning" placeholder=".form-control-warning">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-default" placeholder=".form-control-default">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-danger" placeholder=".form-control-danger">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-success" placeholder=".form-control-success">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-inverse" placeholder=".form-control-inverse">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-info" placeholder=".form-control-info">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">Text-color</h4>
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-txt-primary" placeholder=".form-txt-primary">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-warning" placeholder=".form-txt-warning">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-default" placeholder=".form-txt-default">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-danger" placeholder=".form-txt-danger">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-success" placeholder=".form-txt-success">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-inverse" placeholder=".form-txt-inverse">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-txt-info" placeholder=".form-txt-info">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 mobile-inputs">
                                            <h4 class="sub-title">Background-color</h4>
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>

@endsection