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
                    <div class="dataTable">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>123-456-7890</td>
                                    <td>123 Main St</td>
                                    <td>New York</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>janesmith@example.com</td>
                                    <td>987-654-3210</td>
                                    <td>456 Elm St</td>
                                    <td>Los Angeles</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alice Johnson</td>
                                    <td>alicejohnson@example.com</td>
                                    <td>555-123-4567</td>
                                    <td>789 Oak St</td>
                                    <td>Chicago</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Michael Brown</td>
                                    <td>michaelbrown@example.com</td>
                                    <td>222-333-4444</td>
                                    <td>321 Pine St</td>
                                    <td>Miami</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sarah Wilson</td>
                                    <td>sarahwilson@example.com</td>
                                    <td>777-888-9999</td>
                                    <td>555 Cedar St</td>
                                    <td>Seattle</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>David Lee</td>
                                    <td>davidlee@example.com</td>
                                    <td>444-555-6666</td>
                                    <td>999 Maple St</td>
                                    <td>San Francisco</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Emily Davis</td>
                                    <td>emilydavis@example.com</td>
                                    <td>666-777-8888</td>
                                    <td>777 Birch St</td>
                                    <td>Boston</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Robert Wilson</td>
                                    <td>robertwilson@example.com</td>
                                    <td>111-222-3333</td>
                                    <td>888 Walnut St</td>
                                    <td>Denver</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Linda Martinez</td>
                                    <td>lindamartinez@example.com</td>
                                    <td>999-888-7777</td>
                                    <td>666 Oak St</td>
                                    <td>Phoenix</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Christopher Taylor</td>
                                    <td>christophertaylor@example.com</td>
                                    <td>333-444-5555</td>
                                    <td>222 Pine St</td>
                                    <td>Austin</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Amy Adams</td>
                                    <td>amyadams@example.com</td>
                                    <td>888-999-0000</td>
                                    <td>111 Elm St</td>
                                    <td>San Diego</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Kevin Scott</td>
                                    <td>kevinscott@example.com</td>
                                    <td>555-666-7777</td>
                                    <td>333 Oak St</td>
                                    <td>Portland</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Megan Harris</td>
                                    <td>meganharris@example.com</td>
                                    <td>222-333-4444</td>
                                    <td>444 Maple St</td>
                                    <td>Nashville</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>William Clark</td>
                                    <td>williamclark@example.com</td>
                                    <td>777-888-9999</td>
                                    <td>555 Elm St</td>
                                    <td>Atlanta</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Jennifer Baker</td>
                                    <td>jenniferbaker@example.com</td>
                                    <td>111-222-3333</td>
                                    <td>666 Pine St</td>
                                    <td>Dallas</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Daniel Young</td>
                                    <td>danielyoung@example.com</td>
                                    <td>444-555-6666</td>
                                    <td>999 Oak St</td>
                                    <td>Houston</td>
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