@extends('layout.master')

@section('Titre')
@ensection

@section('content')
   <br><br>
   
    <div class="ajoutaprenant">
      <a href="/ajouterAprenant" class="btn btn-primary ">Ajouter un aprenant</a>
   </div>
   <div class="liste">
      <p>Liste des aprenants</p>
    </div>
   <style>
      .ajoutaprenant{
        display:flex;
        justify-content:right;
        
     }
     .liste{
        font-size:30px;
        color:orange;
     }
   </style>
   
  
    <div class="scroll-bar">  
<table class="table table-striped">
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>téléphone</th>
                        <th>Formation</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                  @foreach($users as $aprenant)
                    <tr>
                        <td><img style="width:50px" src="/imagesapprenants/{{$aprenant->photo}}" alt=""></td>
                        <td>{{$aprenant->nom}}</td>
                        <td>{{$aprenant->prenom}}</td>
                        <td>{{$aprenant->email}}</td>
                        <td>{{$aprenant->telephone}}</td>
                        <td>{{$aprenant->formation}}</td>
                        <td><a href="role_edit/{{$aprenant->id}}" class="btn btn-info">Editer </a></td>
                        <td>
                          <form action="role_delete/{{$aprenant->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Supprimer </button>
                        </form>
                       </td>
                    </tr>
                    @endforeach
                    </table>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum enim, nemo nesciunt, dolores dolore quidem dolor praesentium cum illum cumque eveniet a odit! Odio, ex recusandae soluta possimus molestias quasi aliquam quod enim nihil consequatur, excepturi error vero asperiores natus! Et omnis itaque saepe aperiam non quidem ut optio maxime quos iure impedit voluptas sed incidunt suscipit doloribus eos exercitationem ipsum, dignissimos modi dolor aut labore ullam. In dicta rerum ipsa perspiciatis illo nobis eaque maiores nam nihil facilis iusto ex, doloremque repellendus quis recusandae distinctio est architecto error saepe doloribus. Labore, veritatis distinctio eaque autem, quaerat ducimus praesentium beatae sequi ipsam qui vel? Pariatur unde enim similique eum in alias nesciunt nihil. Quae obcaecati eos temporibus nobis laboriosam eum ut, optio in! Nam quam quod quia! Laboriosam, repellendus consequuntur! Enim cumque corrupti obcaecati consequatur. Sequi non cum tenetur labore odit atque quas quia libero delectus natus dicta adipisci, nobis repellat, quaerat ex vel cupiditate nihil. Voluptatem natus suscipit quibusdam error ab aliquid itaque quia molestiae laboriosam nisi porro, ex nesciunt dolore ipsa excepturi facilis, quaerat quisquam ipsam! Doloribus modi repudiandae dolore provident excepturi corporis corrupti perferendis, temporibus asperiores magni cumque adipisci voluptatibus dolores ipsam molestias enim dicta sapiente? Earum tempore vel vero voluptatum. Ipsa minus at voluptate fugiat voluptatem neque eveniet alias mollitia. Nisi dolorum velit accusamus maiores, ipsum at sequi saepe optio molestias nam veritatis, recusandae alias fuga eligendi, sint voluptatibus mollitia explicabo temporibus ipsa? Excepturi modi quidem blanditiis sequi laboriosam ut sed aut facilis sint, at, nesciunt eligendi exercitationem, doloremque quibusdam vitae est suscipit odio? Quibusdam eos asperiores architecto iste inventore voluptates dolores, fugit ut maiores voluptate. Fuga temporibus, excepturi laboriosam corrupti cupiditate, sit natus unde inventore blanditiis rem voluptatum aliquam impedit necessitatibus sunt, distinctio eaque. Explicabo, ipsam! Aliquid et quibusdam doloribus laborum molestias fugit, maxime error ab, tempore labore magnam corrupti tenetur ipsam aut impedit odit ipsum veritatis saepe, officia accusantium repellendus! Vel aut voluptatum est voluptates tempora animi ea harum sit ab quas molestiae vitae odit consequatur dolor aspernatur excepturi, aliquam qui quisquam beatae autem at? Veritatis magnam maiores molestias eius est, itaque rem perspiciatis optio dolore exercitationem quaerat quidem temporibus mollitia sed libero obcaecati, voluptatum autem saepe! Iste odio fugiat dolores, consectetur non obcaecati eius quidem ad sunt molestiae expedita sapiente omnis, officiis reprehenderit ipsum alias accusamus voluptatum? Ullam laborum quisquam deleniti sit earum et porro! Dolor, sunt? Nulla excepturi mollitia dolorem ipsa quibusdam, optio modi rerum, doloremque odio architecto iure numquam repellendus, quo ullam distinctio itaque libero! Iure deserunt ipsa labore omnis repellendus? Modi impedit qui eius. Ullam, mollitia! Atque laborum incidunt dignissimos accusamus numquam et quasi id quibusdam perspiciatis qui dolorum, aspernatur sint mollitia eaque itaque porro officiis obcaecati tempore maiores veritatis dolorem! Facilis adipisci impedit atque dolore, voluptatibus asperiores eligendi deserunt expedita cumque sequi culpa earum optio minus qui ducimus maiores, at provident quis eum in? Atque sapiente ad minus numquam deleniti fugit quas obcaecati ex molestias beatae vitae eos laudantium laboriosam amet nulla recusandae, harum dolores id quos quia? Natus aliquam vel optio deserunt corrupti, minus eius molestiae sequi delectus consequuntur facilis voluptatem magnam est ratione dolore modi numquam maiores id sint eum provident! Laboriosam iste nemo voluptatum, distinctio magnam laudantium, nam eveniet nihil placeat animi nobis reprehenderit delectus magni saepe. Animi officiis laborum delectus, eligendi dolorum dolores rem quos. Facilis architecto modi pariatur libero velit dolore molestias voluptatum asperiores laudantium sequi illum corrupti ab accusamus culpa tempora quisquam, mollitia quod aut, similique, nihil sit numquam reprehenderit! Asperiores distinctio eos sint incidunt neque rerum ab repellat cumque quibusdam, doloribus fugiat porro quis quo assumenda laudantium ratione minus. Optio doloribus animi nemo laborum aspernatur earum necessitatibus sed reiciendis dolore? Magnam vel perferendis temporibus nihil eveniet minus, vero, quae, exercitationem labore iusto veritatis id? Possimus amet eveniet at perspiciatis fuga non alias, tempore laudantium? Esse, ipsum? Illum repellendus quae itaque sit magni nihil hic, pariatur quasi totam libero aliquid placeat, quaerat officiis dolores, sed sequi cupiditate vel reprehenderit est earum iusto delectus obcaecati! Vel, maxime assumenda aspernatur accusamus cumque tempora adipisci et ad tenetur quod modi doloribus libero culpa, voluptatibus nobis amet hic laudantium praesentium eligendi, mollitia unde voluptate corrupti explicabo deserunt. Vel quibusdam suscipit repellat explicabo, quidem amet eum deserunt reprehenderit maxime quasi iusto, veniam consequatur odio cumque aperiam architecto quas maiores tempore illum, totam velit adipisci. Quam, ipsam, labore id, fugiat iste reiciendis veritatis reprehenderit alias vitae recusandae ipsum mollitia cupiditate quis quas. Velit totam illo pariatur ipsa itaque cumque atque iure, quae non vero illum nesciunt repudiandae alias tempora nihil, iusto labore est, ab architecto possimus incidunt. Fugit vel veniam perferendis accusamus porro, quibusdam quidem provident sed culpa enim quam dignissimos officia, totam ducimus magni assumenda sint exercitationem harum neque consectetur eius maxime? Iste ad quis, perspiciatis vel, necessitatibus optio iusto culpa quia, amet dolore assumenda pariatur? Deleniti nam aut cupiditate corrupti sed, commodi possimus, dolores ab nulla voluptate aperiam debitis suscipit minima temporibus et iure? Possimus expedita, itaque odio nesciunt non iste pariatur quisquam minima, molestiae commodi illum aliquid beatae deleniti numquam fugit nam! Et velit nihil voluptas temporibus accusantium assumenda deleniti sint cum earum eligendi. Quos aliquam veritatis nemo quisquam impedit ipsum aspernatur autem, hic accusamus? Maiores autem enim, quibusdam aut ex vel provident. Quisquam eligendi hic natus veritatis nihil quis sint consequuntur dicta necessitatibus doloribus? Nihil enim qui soluta consectetur veniam dignissimos magnam accusamus voluptatem pariatur eum harum eaque deserunt expedita quas odio, officia id ipsum quaerat fugiat laudantium! Officia vel, ipsam cum sapiente quas natus nobis ut quod est soluta delectus exercitationem placeat explicabo quisquam similique asperiores suscipit error et non tempore pariatur consequatur facilis. Dolore quidem et quo dolorem cupiditate excepturi aspernatur iusto culpa, a tempore tempora magnam animi fugit. Repellendus, rerum? Reprehenderit ratione perspiciatis modi fugiat nesciunt est quos corporis officia aut aliquid beatae quasi commodi excepturi at cumque itaque ad iure, quo a dicta, atque, asperiores optio. Debitis corporis porro recusandae quasi voluptas obcaecati vitae ex, a modi ullam, est tenetur, vero harum dicta quos itaque ad laborum dolorum. Odio, necessitatibus veniam.
                </div>   
                   
<style>
  .scroll-bar{
   width:100%;
   height: 100%;
  }

</style>
@endsection

@section('scripts')

@endsection

