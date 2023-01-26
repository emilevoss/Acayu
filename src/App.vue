<template>
    <div class="content-kids" id="contentKids">

        <!----- Header Section START ----->
      <div class="icon-scroll"></div>
        <div class="header-wrap">
            <div class="header-section" :class="{scroll: bgShow}">
                <div class="header-logo">
                    <a title="Content-Kids" href="https://content-kids.com/">
                        <img src="@/assets/MediumSquareLogo.jpg" class="header-img" alt="Content-Kids Logo">
                    </a>
                </div>

                <div class="header-menu" >
                    <div class="header-text" >
                        <span :class="{open: isOpen}">MENU</span>
                    </div>
                    <div @click="onClick" class="header-burger" :class="{open: isOpen}">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
        </div>
      <div class="scroll-display"></div>
        <div @click="onClick" class="nav-list-block" :class="{open: openMenu}">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#about" class="nav-link">About Me</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#collaboration" class="nav-link">Collabs</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#workshops" class="nav-link">Workshops</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#rates" class="nav-link">Rates & Bookings</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>

        <!---------------------------------------------------------------------------------->
        <!----- About Section START ----->

        <section id="about" class="clamp-1280">
            <h1>About Me</h1>
            <div class="parent-container-2 about-block">
                <div class="child-of-1-2">
                    <img class="about-img" src="@/assets/profile-pic.jpg" alt="Content-Kids Candy Voss profile">
                </div>
                <div class="child-of-2-2">
                    <h3 class="about-text">My name is Candice Voss and I am a Parent Support and Child Behaviour Consultant.
                        Content-Kids is my private practice that is based in Cape Town, South Africa. I have had several years experience in working with children with challenging behaviours within the home as well as educational settings and offer parents as well as teachers support to understand children’s needs and behaviours. I specialise in working with children who are on the autism spectrum.
                    </h3>
                </div>
            </div>

        </section>
        <!---------------------------------------------------------------------------------->
        <!----- Collaborations Section START ----->
        <div id="collaboration"></div>
        <section class="clamp-1280">
            <h1>Collabs</h1>
            <div class="collab-info">
                <h2>I work at Cape Town Therapy Hub on a Tuesday afternoon and consult closely with Naomi Botha from
                    Speak Autism</h2>
            </div>
            <div class="parent-container-2">
                <div class="collab-child-of-1-2">
                  <h3><a href="https://cttherapyhub.co.za/" target="_blank">Cape Town Therapy Hub</a></h3>
                    <p>Cape Town Therapy Hub is a therapeutic center located in Green Point. The Center offers
                        psychological services, speech therapists, occupational therapists, dietetics, diagnostic
                        educational assessments, parent support as well as autism support. Therapists are all part of a
                        multidisciplinary team who have a wealth of knowledge and experience working with families and
                        children. The vision of Cape Town Therapy Hub is to offer professional and personalised
                        therapeutic services to clients in a multidisciplinary team environment.</p>
                </div>
                <div class="child-of-2-2">
                  <h3><a href="http://www.speakautism.co.za/" target="_blank">Speak Autism!</a></h3>
                    <p>Naomi uses a wide range of tried and tested key support strategies and teaching tools, for
                        supporting and meeting the individual needs of our children with Asperger which falls on the
                        Autism spectrum. She uses developmental and behavioural approaches to focus on the individual
                        differences of each child; providing relationship based interventions with the goals of
                        releasing potential, increasing understanding, developing confidence, improving skills and
                        changing behaviour</p>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->
        <!----- Services Section START ----->

        <section class="services-section clamp-1280" id="services">
            <h1>Services</h1>
            <div class="parent-container-3">
                <div class="child-of-1-3">
                    <div class="servicesImg">
                        <img src="@/assets/autism-support.jpg" class="services-image" alt="Content-Kids Autism Support">
                    </div>
                    <h3>Autism Support</h3>
                    <p>I have worked with autistic individuals and autism organisations for over a decade.
                        I offer the following support services to parents, teachers and professionals:<br><br></p>
                    <div class="service-list">
                        <ul class="service-list-list">
                            <li>Home visits</li>
                            <li>Understanding autism </li>
                            <li>Autism and the sensory system</li>
                            <li>Positive behaviour management</li>
                            <li>Autism and toilet training</li>
                            <li>Communication strategies for the non speaking autistic child</li>
                            <li>Social stories</li>
                            <li>Social skills</li>
                            <li>Classroom behaviour management</li>
                            <li>Inclusive classroom support</li>
                            <li>IEP/ISP support or development</li>
                            <li>Class observations</li>
                            <li>Curriculum development for early learners</li>
                            <li>Facilitation training</li>
                            <li>Autism workshops</li>
                        </ul>
                    </div>

                </div>
                <div class="child-of-1-3">
                    <div class="servicesImg">
                        <img src="@/assets/classroom-support.jpg" class="services-image" alt="Content-Kids Classroom Support">
                    </div>
                    <h3>Teacher Support</h3>
                    <p>I offer teachers support with children who are having behavioural,, communication, sensory and social skill challenges with special focus being on supporting teachers with autistic learners.
                        I offer the following support services to teachers and schools:<br><br></p>
                    <div class="service-list">
                        <ul class="service-list-list">
                            <li>Classroom behaviour management</li>
                            <li>Inclusive classroom support</li>
                            <li>Emotional regulation in the classroom</li>
                            <li>IEP/ISP support or development</li>
                            <li>Class observations</li>
                            <li>Curriculum development for early learners</li>
                            <li>Curriculum adaptations</li>
                            <li>Facilitation training</li>
                            <li>Autism workshops</li>
                            <li>Workshops for teachers</li>
                            <li>Teacher support meetings</li>
                        </ul>
                    </div>
                </div>
                <div class="child-of-1-3">
                    <div class="servicesImg">
                        <img src="@/assets/parent-support.jpg" class="services-image" alt="Content-Kids Parent Support">
                    </div>
                    <h3>Parent Support</h3>
                    <p>I offer parents support at my practice as well as offer home visits. I focus on practical solutions for parents to implement at home to make life more manageable and enjoyable at home.
                        I offer the following support services to parents:<br><br></p>
                    <div class="service-list">
                        <ul class="service-list-list">
                            <li>Positive behaviour management</li>
                            <li>Positive parenting</li>
                            <li>A space for parents to air their concerns about their child</li>
                            <li>A space for parents to become consistent with their parenting choices</li>
                            <li>Discipline and boundaries at home</li>
                            <li>Baby sign language</li>
                            <li>Toilet training</li>
                            <li>Emotional regulation</li>
                            <li>Tantrum support</li>
                            <li>School placement guidance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->
        <!----- Workshops Section START ----->

        <section class="clamp-1280 workshop-section" id="workshops">
            <h1>Workshops</h1>
            <div class="parent-container-3">
                <div class="child-of-1-3">
                    <h3>Autism workshops for parents and professionals:</h3>
                      <div class="service-list">
                        <ul class="service-list-list">
                          <li>How to manage tantrums and meltdowns</li>
                          <li>Positive behavior management</li>
                          <li>How to emotionally regulate an autistic child</li>
                          <li>Toilet training</li>
                          <li>Communicating with a non-speaking child</li>
                          <li>Introduction to autism</li>
                        </ul>
                      </div>

                </div>
                <div class="child-of-1-3">
                    <h3>Autism workshops for teachers and professionals:</h3>
                      <div class="service-list">
                        <ul class="service-list-list">
                          <li>Classroom positive behavior management</li>
                          <li>Inclusive classroom solutions</li>
                        </ul>
                      </div>
                </div>
                <div class="child-of-1-3">
                    <h3>Parenting workshops:</h3>
                      <div class="service-list">
                        <ul class="service-list-list">
                          <li>How to manage tantrums and meltdowns</li>
                          <li>Positive behavior management</li>
                          <li>Emotional regulation</li>
                          <li>Toilet training</li>
                          <li>Anxiety</li>
                          <li>3 Day positive behaviour management course</li>
                        </ul>
                      </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->
        <!----- Slides Section START ----->

<!--        <section class="slide-section">-->
<!--            <div class="slide-section-container">-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="slide-section-container">-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="slide-section-top">-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->

<!--        </section>-->
<!--        <template>-->
<!--            <VueSlickCarousel v-bind="settings" ref="carousel" class="clamp-1280">-->
<!--                <div>-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div><div>-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div><div>-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div>-->
<!--                <div>-->
<!--                    <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--                </div><div>-->
<!--                <img src="@/assets/SmallLogo.jpg" alt="">-->
<!--            </div><div>-->
<!--                <img src="@/assets/SmallLogo.jpg" alt="">-->

<!--            </div>-->

<!--            </VueSlickCarousel>-->
<!--        </template>-->



        <!---------------------------------------------------------------------------------->
        <!----- Rates & Bookings Section START ----->


        <section class="clamp-1280 workshop-section" id="rates">
            <h1>Rates & Bookings</h1>
            <div class="parent-container-3">
                <div class="child-of-1-3">
                    <h3>Therapy sessions</h3>
                    <p>Sessions are usually an hour long and are R600 per hour and R300 per half hour thereafter
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Home visits</h3>
                    <p>R600 per hour and R300 per hour thereafter
                        Travel time and AA rates may apply
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Workshops</h3>
                    <p>Workshops are usually between 2-3 hours long and cost R300 per person or R450 per couple.
                        Group workshops can be prearranged with discounted prices for groups larger than 8 people.
                    </p><br>
                </div>

            </div>
        </section>


        <!---------------------------------------------------------------------------------->
        <!----- Contact Section START ----->

        <section class="clamp-1280" id="contact">
            <h1>Contact</h1>
            <div class="collab-info">
                <h2>If you have any quiries please contact me</h2>
            </div>
            <div class="contact-wrap">
                <div class="contact-block">
                    <img src="@/assets/smartphoneck.svg" alt="Content-Kids Contact Number" class="contact-img">
                    <h3>+27823791701</h3>
                </div>
                <div class="contact-block">
                    <img src="@/assets/emailck.svg" alt="Content-Kids Email" class="contact-img">
                    <h3>candy@content-kids.com</h3>
                </div>
                <div class="contact-block">
                    <img src="@/assets/facebookck.svg" alt="Content-Kids Facebook" class="contact-img">
                    <h3><a href="https://www.facebook.com/Content-kids-580004039112889/" target="_blank">Facebook</a>
                    </h3>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->


    </div>
</template>

<style lang="less">
    @import "css/global.css";
    @import "css/queries.css";



</style>
<script lang="ts">

    import {Component, Vue} from 'vue-property-decorator';
    import VueSlickCarousel from 'vue-slick-carousel';
    import 'vue-slick-carousel/dist/vue-slick-carousel.css';
    import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';



    interface userInfo {
        Name: string
        Surname: string
        Subject: string
        EmailAddress: string
        Message: string
    }

    @Component({components: { VueSlickCarousel }})
    export default class App extends Vue {

        settings = {
            "dots": true,
            "dotsClass": "slick-dots custom-dot-class",
            "edgeFriction": 0.35,
            "infinite": true,
            "speed": 500,
            "slidesToShow": 2,
            "slidesToScroll": 1,
            "arrows": true,
        };




        mounted() {
            const sectionOne = document.querySelector(".scroll-display")!;

            const sectionOneOptions = {
                rootMargin: "-100px 0px 100px 0px"
            };

            const sectionOneObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        this.bgShow = !entry.isIntersecting;
                    });
                },
                sectionOneOptions);

            sectionOneObserver.observe(sectionOne);

        };

        submitForm (e:Event) {
            e.preventDefault();
                let currentObj = this;
                axios.post('https://content-kids.com/ckform.php', {
                    firstName: this.form.Name,
                    lastName: this.form.Surname,
                    _subject: this.form.Subject,
                    emailAddress: this.form.EmailAddress,
                    _message: this.form.Message,
                })
                    .then((response: any) => {
                        this.showThanks = true;
                        console.log(response.data);
                    })
                    .catch((error: any) => {
                        console.log(error);
                        this.showThanks = false;
                    });
        }

        form: userInfo = {
            Name: '',
            Surname: '',
            Subject: '',
            EmailAddress: '',
            Message: '',
        };

        onClick(event: any) {
            this.isOpen = !this.isOpen
            this.openMenu = !this.openMenu
        };


        isOpen: boolean = false;
        openMenu: boolean = false;
        bgShow: boolean = false;
        showThanks: boolean = false;



    }


</script>