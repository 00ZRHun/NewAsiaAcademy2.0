<?php
class Short_Course_Model extends CI_Model{

    public function add_short_course($data)
    {
        return $this->db->insert('short_course', $data);
    }
    
    public function get_short_course()
    {
        	$this->db
            ->select()
            ->from('short_course')
            ->where('delmode',0);
       		 $query = $this->db->get();
       		 return $query->result();
    }
    
    public function get_where_short_course($id)
    {
        $this->db
            ->select()
            ->from('short_course')
            ->where('id',$id)
            ->where('delmode',0);
            $query = $this->db->get();
        return $query->result();
    }

    public function update_short_course($data,$id)
    {
        return $this->db
            ->where('ID', $id)
            ->update('short_course', $data);
    }

    public function delete_short_course($data,$id)
    {
        // right now it have run here, previously it didn't run the code
        $this->db->where('ID',$id);
        $this->db->update("short_course",$data);
        print $this->db->last_query();
    }

    public function get_short_course_modal($id)
    {
        $this->db
            ->select('*')
            ->from('short_course')
            ->where('id',$id)
            ->where('delmode',0);
            $query = $this->db->get();
        // print $this->db->last_query();
         return $query->row_array();
    }
}
?>