<?php
/** @var TYPE_NAME $contacts */
?>
<div class="row">
    <!-- /# column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title pr">
                <h4>Contact messages</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Messages</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($contacts as $contact):?>
                        <tr>
                            <td><?=$contact->id;?></td>
                            <td><?=$contact->name;?></td>
                            <td><?=$contact->surname;?></td>
                            <td><?=$contact->phone;?></td>
                            <td><?=date("d-m-Y H:i", strtotime($contact->created_at));?></td>
                            <td> <a href="/site/message?id=<?=$contact->id;?>"><button type="button" class="btn btn-link">Xabarni o'qish</button></a></td>

                            <td>
                                <?php if($contact->status == 0): ?>
                                    <a href="/site/status?id=<?=$contact->id;?>"><button type="button" class="btn btn-success">Aktiv</button></a>
                                <?php else: ?>
                                    <button type="button" class="btn btn-warning">Noaktiv</button>
                                <?php endif; ?>
                            </td>

                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>