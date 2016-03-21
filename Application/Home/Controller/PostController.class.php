<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 主页
 */
class PostController extends Controller
{
    public function index(){
        $model = D('PostView');
        $schoolpost = $model->limit(5)->order('post.time DESC')->where('post.cate_id=15')->select();
        $domesticpost = $model->limit(5)->order('post.time DESC')->where('post.cate_id=16')->select();
        $abroadpost = $model->limit(5)->order('post.time DESC')->where('post.cate_id=17')->select();
        $hotpost = $model->limit(5)->order('post.time DESC')->where('post.type=2')->select();
        $this->assign('hot', $hotpost);
        $this->assign('school',$schoolpost);
        $this->assign('domestic',$domesticpost);
        $this->assign('abroad',$abroadpost);
        $this->display();
    }
    /**
     * 文章列表
     * @return [type] [description]
     */
    public function detail($id)
    {
        $model = D('PostView');
        $post = $model->where('post.id='.$id)->select();
        $this->assign('model', $post);
        //上一篇
        $preshow = $model->order('post.time DESC')->where('post.id<'.$id)->limit(1)->select();
        if(!$preshow){
            $preshow['title'] = '';
        }
        $this->assign('preshow',$preshow);
        //下一篇
        $nextshow = $model->order('post.time ASC')->where('post.id>'.$id)->limit(1)->select();
        if (!$nextshow){//如果不存在的话
            $nextshow['title'] = '';
        }
        $this->assign('nextshow',$nextshow);

        $this->display();
    }

    public function classify($type){
        $model = D('PostView');
        if($type == 2){
            $post = $model->order('post.time DESC')->where('post.type='.$type)->select();
        }else{
            $post = $model->order('post.time DESC')->where('post.cate_id='.$type)->select();
        }
        $this->assign('model', $post);
        $this->display();
    }

    public function search($key){

            $where['post.title'] = array('like',"%$key%");
            $where['member.username'] = array('like',"%$key%");
            $where['category.title'] = array('like',"%$key%");
            // $where['post.content'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = D('PostView')->where($where);
            $post = $model->order('post.id DESC')->where($where)->select();

            $this->assign('search', $post);
            $this->display();
    }

}
