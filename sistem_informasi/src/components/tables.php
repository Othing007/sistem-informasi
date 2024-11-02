<!-- src/components/tables.php -->

<!-- Tabel Karyawan -->
<table class="table employee-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Jabatan</th>
            <th>Tanggal Bergabung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo htmlspecialchars($employee['name']); ?></td>
                <td><?php echo htmlspecialchars($employee['department']); ?></td>
                <td><?php echo htmlspecialchars($employee['job_title']); ?></td>
                <td><?php echo htmlspecialchars($employee['hire_date']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
