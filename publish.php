<?php
   $currentPage = 'About';
   include 'header.php';
?>

    <section class="my-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <h2 class="event_heading text-center mb-3">Volume 5 - Issue 2</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="dataTable table-responsive">
                        <table id="example" class="table dataTable table-striped table-borderless" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th class="book_name">
                                        Book Name
                                    </th>
                                    <th>Authors</th>
                                    <th>Page Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="book_name">
                                        Co-Processed Excipients: Unlocking the Potential of Direct Compression in Pharmaceutical Formulation Development
                                    </td>
                                    <td>
                                        <ul class="d-flex flex-column">
                                            <li>Maddukuri Laxmi Bharani</li>
                                            <li>Arun Kumar Patra</li>
                                            <li>Dipty Rani Nayak</li>
                                            <li>Prasanta Kumar Choudhury</li>
                                        </ul>
                                    </td>
                                    <td>01-10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-table-view">View</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="book_name">
                                        Co-Processed Excipients: Unlocking the Potential of Direct Compression in Pharmaceutical Formulation Development
                                    </td>
                                    <td>
                                        <ul class="d-flex flex-column">
                                            <li>Maddukuri Laxmi Bharani</li>
                                            <li>Arun Kumar Patra</li>
                                            <li>Dipty Rani Nayak</li>
                                            <li>Prasanta Kumar Choudhury</li>
                                        </ul>
                                    </td>
                                    <td>01-10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-table-view">View</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="book_name">
                                        Co-Processed Excipients: Unlocking the Potential of Direct Compression in Pharmaceutical Formulation Development
                                    </td>
                                    <td>
                                        <ul class="d-flex flex-column">
                                            <li>Maddukuri Laxmi Bharani</li>
                                            <li>Arun Kumar Patra</li>
                                            <li>Dipty Rani Nayak</li>
                                            <li>Prasanta Kumar Choudhury</li>
                                        </ul>
                                    </td>
                                    <td>01-10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-table-view">View</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                pageLength: 10, // Show 10 entries by default
                lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
            });
        });
    </script>
    <?php include 'footer.php'; ?>