<?php
class Limited_Course_Model extends CI_Model{

    public function add_limited_course($data)
    {
        return $this->db->insert('limited_course', $data);
    }
    
    public function get_limited_course()
    {
        	$this->db
            ->select()
            ->from('limited_course')
            ->where('delmode',0)
            // $this->db
            ->order_by("upload_time", "ASC");
       		$query = $this->db->get();
            return $query->result();
            //////////////////////////////////// 
            /* $this->db->from($this->"limited_course");
            $this->db->order_by("upload_time", "asc");
            $query = $this->db->get(); 
            return $query->result(); */
    }
    
    public function get_where_limited_course($id)
    {
        $this->db
            ->select()
            ->from('limited_course')
            ->where('id',$id)
            ->where('delmode',0);
            $query = $this->db->get();
        return $query->result();
    }

    public function update_limited_course($data,$id)
    {
        return $this->db
            ->where('ID', $id)
            ->update('limited_course', $data);
    }

    public function delete_limited_course($data,$id)
    {
        // right now it have run here, previously it didn't run the code
        $this->db->where('ID',$id);
        $this->db->update("limited_course",$data);
        print $this->db->last_query();
    }

    public function get_limited_course_modal($id)
    {
        $this->db
            ->select('*')
            ->from('limited_course')
            ->where('id',$id)
            ->where('delmode',0);
            $query = $this->db->get();
        // print $this->db->last_query();
         return $query->row_array();
    }
}
?>