<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="text-center card-title" style="float: none; font-weight:500">
            <i class="nav-icon fas fa-chart-bar"></i>
            Data Instrumen Akreditasi
            Program
            Studi
            (IAPS) Fakultas
        </h3>
    </div>
    <div class="card-body pb-0">
        <div class="row justify-content-center">
            <section class="col-lg-9 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">Program Studi</h3>
                    </div>
                    <!-- /.card-body -->
                </div>
                @foreach ($prodi as $p)
                    <div class="card collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-university mr-1"></i>
                                {{ $p->nama }}
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-1">
                                <a href="/lkps?id={{ $p->id }}" class="btn btn-success col-md-12">LKPS</a>
                            </div>
                            <div class="row m-1">
                                <a href="/led?id={{ $p->id }}" class="btn btn-secondary col-md-12">LED</a>
                            </div>
                            <div class="row m-1">
                                <a href="/matriks?id={{ $p->id }}" class="btn btn-primary col-md-12">Matriks
                                    Penilaian</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</div>
