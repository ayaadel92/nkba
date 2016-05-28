@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px">
<div class="bdy">
{{ Form::open(array('route' => 'transfer_store' ))}}    

  <table class=" table col-md-8">  

    <tr>              
        <td>{{ Form::label ('ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ' ,'ﺭﻗﻢ اﻟﻌﻀﻮﻳﻪ ',array('class' => 'style control-label' ) ) }}</td>
          <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil">   </i>
                                                                                                     </span>
                    {{ Form::text('mem_number', null, array('required','class'=>'form-control col-md-8')) }}
          </td>           
   </tr>

    <tr>      
          <td>{{Form::label(' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',' ﺭﻗﻢ اﻟﺒﻄﺎﻗﺔ اﻟﻌﻼﺟﻴﺔ ',array('class' => 'style' ) )}}</td>
          <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                 </span>
                    {{ Form::text('card_id', null,array('required','class'=>'form-control col-md-8')) }}
          </td>
   </tr>

   <tr>      
          <td>{{Form::label(' اسم المريض ',' اسم المريض ',array('class' => 'style' ))}}</td>
          <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                          </span>
                    {{ Form::text('name', null,array('required','class'=>'form-control col-md-8')) }}
         </td>
   </tr>

   <tr>  
        <div class="form-group">      
             <td>{{Form::label(' درجة القرابة ',' درجة القرابة ',array('class' => 'style' ))}}</td>
              <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                      {{ Form::select('relative',['م'=>'المهندس','ق'=>'قريب'],'S',array('required','class'=>'form-control col-md-8')) }}
             </td>
     </div>
  </tr>   

  <tr>      
      <td>{{Form::label(' التشخيص الطبى ',' التشخيص الطبى ',array('class' => 'style' ))}}</td>
      <td>
          {{ Form::textarea('examin', null,array('required', 'class'=>'form-control col-md-9', 'rows' => 3)) }}</td>
  </tr>

  <tr>      
        <td>{{Form::label(' نوع التحويل',' نوع التحويل',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-th-list"></i>
                                                                                                         </span>
                  {{ Form::select('type',['أ'=>'أشعة','ت'=>'تحليل'],'S',array('required','class'=>'form-control col-md-8')) }}
        </td>
 </tr>

  <tr>      
        <td>{{Form::label(' اسم الطبيب ',' اسم الطبيب ',array('class' => 'style' ))}}</td>
        <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                       </span>
                  {{ Form::text('doctor_name', null, ['class'=>'form-control col-md-8']) }}
        </td>
  </tr>  

   <tr>      
        <td>{{Form::label(' اسم المستشفى ',' اسم المستشفى ',array('class' => 'style' ))}}</td>
        <td ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i>
                                                                                                </span>
                  {{ Form::text('hospital_name', null, ['class'=>'form-control col-md-8']) }}
        </td>
 </tr> 

 <tr>      
      <td>{{Form::label(' اسم المعمل',' اسم المعمل',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i></span>
                {{ Form::text('lap_name', null, ['class'=>'form-control col-md-8']) }}
      </td>
</tr> 

<tr>      
    <td>{{Form::label(' التكلفة الكلية',' التكلفة الكلية',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i></span>

              {{ Form::text('total_cost', null, ['class'=>'form-control col-md-8']) }}
    </td>
</tr>            
<tr>      
    <td>{{Form::label(' قبول التحويل؟',' قبول التحويل؟',array('class' => 'style' ))}}</td>
    <td><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-th-list"></i></span>

              {{ Form::select('acceptation', ['ن'=>'نعم','ل'=>'لا'], 'S',['class'=>'form-control col-md-8']) }}
    </td>
</tr>

<tr>      
      <td>{{Form::label(' نسبة مساهمة النقابة',' نسبة مساهمة النقابة',array('class' => 'style' ))}}</td>
      <td><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-pencil"></i></span>

                {{ Form::text('percentage', null, ['class'=>'form-control col-md-8']) }}
      </td>
</tr>   

<tr>      
    <td>{{Form::label(' التاريخ',' التاريخ',array('class' => 'style' ))}}</td>
    <td  ><span class="input-group-addon  col-md-1"><i class="glyphicon glyphicon-calendar"></i>
                                                                                     </span>
              {{ Form::date('date', \Carbon\Carbon::now(), ['class'=>'form-control col-md-8']) }}
    </td>
</tr>  

  <tr>      
        <td></td>
        <td > {{ Form::submit('إرسال التحويل',array('class'=>'btn btn-success  form-control col-md-9 ')) }}</td>
  </tr>  

</table> 

    {{Form::close()}}
    </div>
</div>



<button class="btn btn-info" onclick="
  @if (Session::has('notifier.notice'))
$.pnotify({
                    title:' {{Session::get('notifier.title')}}' ,
                    text: '{{Session::get('notifier.text')}}',
                    type:'info'
                }); 
 @endif ">notify</button> 


@endsection


