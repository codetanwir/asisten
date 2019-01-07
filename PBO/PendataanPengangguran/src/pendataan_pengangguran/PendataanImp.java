package pendataan_pengangguran;

import java.util.ArrayList;
import java.util.List;
import javax.swing.JOptionPane;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

public class PendataanImp implements Pendataan_Interface {

    private final List<Pendataan> list = new ArrayList<>();

    private final String[] kolom = {"NIK", "NAMA", "ALAMAT"};

    @Override
    public void read(JTable table) {
        DefaultTableModel dtm = new DefaultTableModel(null, kolom);

        for (int i = 0; i < list.size(); i++) {
            Object[] o = new Object[3];
            o[0] = list.get(i).getNik();
            o[1] = list.get(i).getNama();
            o[2] = list.get(i).getAlamat();
            dtm.addRow(o);
        }
        table.setModel(dtm);
    }

    @Override
    public void create(Pendataan p) {
        list.add(p);
        JOptionPane.showMessageDialog(null, "Berhasil disimpan");
    }
}
