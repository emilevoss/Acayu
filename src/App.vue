<template>
    <div class="content-kids" id="contentKids">

        <!----- Header Section START ----->

        <div class="header-wrap">
            <div class="header-section" :class="{scroll: bgShow}">
                <div class="header-logo">
                    <a title="Content-Kids" href="https://content-kids.com/">
                        <img src="@/assets/SmallLogo.png" class="header-img" alt="">
                    </a>
                </div>
                <div class="header-menu">
                    <div class="header-text">
                        <span>MENU</span>
                    </div>
                    <div @click="onClick" class="header-burger" :class="{open: isOpen}">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="scroll-display"></div>
        <section class="clamp-1280" id="about">
            <h1>About Me</h1>
            <div class="parent-container-2">
                <div class="child-of-1-2 about-img">
                    <img src="@/assets/SmallLogo.jpg" alt="About IMG goes here">
                </div>
                <div class="child-of-2-2">
                    <h3>My name is Candice Voss, I have a psychology background and have worked as an au pair,
                        facilitator at mainstream schools and as a therapist at a specialised therapy intervention
                        centre for children with social, emotional, communication challenges and behavioural
                        difficulties. For the past several years I worked at an NPO focusing on Autism, family support,
                        parent and professional workshops, behaviour management, school support and training as well as
                        support at Tygerberg Hospital and Red Cross Children’s Hospital. Content-Kids is my private
                        practice where I focus on parenting support, inclusive education and teacher support as well as
                        special needs support with a specific focus on autism, behavior management and alternative
                        communication systems.</h3>
                </div>
            </div>

        </section>
        <div class="scroll-display"></div>
        <!---------------------------------------------------------------------------------->
        <!----- Collaborations Section START ----->
        <div id="collaboration"></div>
        <section class="clamp-1280">
            <h1>Collabs</h1>
            <div class="collab-info">
                <h2>I work at Cape Town Therapy Hub on a Tuesday afternoons and consult closely with Naomi Botha from
                    Speak Autism</h2>
            </div>
            <div class="parent-container-2">
                <div class="collab-child-of-1-2">
                    <h3>Cape Town Therapy Hub</h3>
                    <p>Cape Town Therapy Hub is a therapeutic center located in Green Point. The Center offers
                        psychological services, speech therapists, occupational therapists, dietetics, diagnostic
                        educational assessments, parent support as well as autism support. Therapists are all part of a
                        multidisciplinary team who have a wealth of knowledge and experience working with families and
                        children. The vision of Cape Town Therapy Hub is to offer professional and personalised
                        therapeutic services to clients in a multidisciplinary team environment.</p>
                </div>
                <div class="child-of-2-2">
                    <h3>Speak Autism!</h3>
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
                        <img src="@/assets/SmallLogo.jpg" class="services-image" alt="">
                    </div>
                    <h3>Parenting Support</h3>
                    <p>I am passionate about parenting and am a mother of 2 amazing children. I have focused on
                        behaviour management for many years, if you can get your child’s behavioural challenges under
                        control parenting becomes a lot more enjoyable.<br><br>
                        This can be achieved through understanding your child, positive parenting, putting up boundaries
                        as a parent and creating routines in the home that will help your child feel secure and able to
                        grow in independence. Parenting is hard work but can be a lot of fun too.<br><br>
                        What to expect as a first time parent<br>
                        Baby sign language<br>
                        Playing with your child<br>
                        Toilet training<br>
                        Specific childhood difficulties (anxiety, ADHD, emotional regulation, helping your child to
                        listen, house rules, childrens chores)<br><br>
                        Positive parenting<br><br>
                        Behavior management</p>
                </div>
                <div class="child-of-1-3">
                    <div class="servicesImg">
                        <img src="@/assets/SmallLogo.jpg" class="services-image" alt="">
                    </div>
                    <h3>School Support</h3>
                    <p>I have a special interest in inclusive education and feel strongly that all children have the
                        right to an education. Children all learn differently and at different paces and there are many
                        strategies that can be implemented to embrace this.
                        This means equipping and supporting schools, teachers, teacher assistants and facilitators to
                        use inclusive teaching tools and methods. <br><br>It is hard to contain my excitement for
                        inclusive education and what teachers could be doing in their classes. As well as educate and
                        assist teachers with their IEP needs.
                        Classroom strategies for the struggling child
                        Inclusive strategies
                        IEP assistance
                        Facilitation placement and training</p>
                </div>
                <div class="child-of-1-3">
                    <div class="servicesImg">
                        <img src="@/assets/SmallLogo.jpg" class="services-image" alt="">
                    </div>
                    <h3>Special Needs Support</h3>
                    <p>I have had international and national experience with Autism as well as Down Syndrome. I have
                        been privileged enough to have been able to dedicate a few years to truly trying to understand
                        Autism and Down Syndrome. Parenting is overwhelming, parenting a special needs child means that
                        you really need so much more support than anyone can comprehend.
                        There is often a team of people supporting each special needs child, but there is not a support
                        system for the parents of those children.<br><br> Special needs children often have many
                        different therapists that they go to, but not many people spend time explaining those therapies
                        to the parents. I hope to bridge this gap between therapists and parents as well as support
                        parents in their journey with their special needs children, especially those that have children
                        with communication barriers.<br><br>
                        Autism<br>
                        Down Syndrome<br>
                        ADHD<br>
                        Sensory Processing<br>
                        Alternative communication strategies<br>
                        Behavior management<br>
                        Early development<br>
                        Au pair training and support
                        School guidance</p>
                </div>
                <div class="school-support">
                    <h2>School Support</h2>
                    <h3>Teacher support meetings can be arranged to discuss specific students in class, brainstorm
                        inclusive strategies, behaviour management strategies as well as deepen understanding of
                        differently-abled learners.</h3>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->
        <!----- Workshops Section START ----->

        <section class="clamp-1280 workshop-section" id="workshops">
            <h1>Workshops</h1>
            <div class="parent-container-3">
                <div class="child-of-1-3">
                    <h3>Parent Workshops</h3>
                    <p>Positive Parenting<br>
                        Behaviour Management<br>
                        Toilet Training
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Teacher Workshops</h3>
                    <p>Behaviour management in the classroom
                        Inclusive Strategies for the classroom
                        What is Autism
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Student Talks</h3>
                    <p>What is Autism (Children 3-6 years old) <br><br>
                        What is Autism (Children 6-14 years old)<br><br>
                        What is Autism (Teenagers 15-18 years old)
                    </p>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------->
        <!----- Slides Section START ----->

        <section class="slide-section">
            <div class="slide-section-container">
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
            </div>
            <div class="slide-section-container">
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
                <div class="slide-section-top">
                    <img src="@/assets/SmallLogo.jpg" alt="">
                </div>
            </div>

        </section>

        <template>
            <div>
                <VueSlickCarousel :arrows="true" :dots="true">
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                </VueSlickCarousel>
            </div>
        </template>



        <!---------------------------------------------------------------------------------->
        <!----- Rates & Bookings Section START ----->


        <section class="clamp-1280 workshop-section" id="rates">
            <h1>Rates & Bookings</h1>
            <div class="parent-container-3">
                <div class="child-of-1-3">
                    <h3>Therapy sessions</h3>
                    <p>Therapy sessions are an hour long and can take place at my offices in Bergvliet or Sea Point.<br><br>
                        R500 per hour and R250 per half hour thereafter
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Home visits</h3>
                    <p>R500 per hour and R250 per half hour thereafter<br><br>
                        Billed hours include travel time<br>
                        AA rates may apply
                    </p>
                </div>
                <div class="child-of-1-3">
                    <h3>Workshops</h3>
                    <p>Workshops costs vary depending on the size and length of workshop.<br><br>
                        Parent workshops are roughly R250 per family<br><br>
                        Please contact me for teacher workshops and student talks.
                    </p>
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


            <!---------------------------------------------------------------------------------->
            <!----- Form Section ----->

            <div class="form clamp-1280">
                <form v-if="!showThanks" @submit="submitForm" method="post" action="https://content-kids/ckform.php" class="form-container">
                    <div class="form-block">
                        <label class="form-label">First Name (required)</label>
                        <input class="form-input" v-model="form.Name" type="text" placeholder="e.g Name" name="firstName" required>
                    </div>
                    <div class="form-block">
                        <label class="form-label">Last Name (required)</label>
                        <input class="form-input" v-model="form.Surname" type="text" placeholder="e.g Surname" name="lastName" required>
                    </div>
                    <div class="form-block">
                        <label class="form-label">Subject</label>
                        <input class="form-input-subject" v-model="form.Subject" type="text" name="subject">
                    </div>
                    <div class="form-block">
                        <label class="form-label">Your Email (required)</label>
                        <input class="form-input" v-model="form.EmailAddress" type="email" name="emailAddress" placeholder="e.g candy@content-kids.com" required>
                    </div>
                    <div class="form-block-1">
                        <label class="form-label-1">Your Message:</label>
                        <textarea class="form-input-1" v-model="form.Message" name="message" placeholder="Write something..."></textarea>
                    </div>
                    <div>
                        <button class="contact-btn" name="submit" type="submit">Submit</button>
                    </div>
                </form>
               </div>
            <div v-if="showThanks" class="submit-thanks">
                <div class="thankyou-message">
                    <img src="@/assets/check.svg" alt="Thank you for submitting the form" class="thankyou-img">
                </div>
                <h2 class="btn-submit-thanks">Thank you for contacting Content-Kids. We will get back to you as soon as we can.</h2>
            </div>
            <!---------------------------------------------------------------------------------->


            <div class="contact-wrap">
                <div class="contact-block">
                    <img src="@/assets/smartphoneck.svg" alt="Contact Number" class="contact-img">
                    <h3>0823791701</h3>
                </div>
                <div class="contact-block">
                    <img src="@/assets/emailck.svg" alt="" class="contact-img">
                    <h3>candy@content-kids.com</h3>
                </div>
                <div class="contact-block">
                    <img src="@/assets/facebookck.svg" alt="" class="contact-img">
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
    import axios from 'axios';
    import 'vue-slick-carousel/dist/slick.css'
    import 'vue-slick-carousel/dist/slick-theme.css'






    interface userInfo {
        Name: string
        Surname: string
        Subject: string
        EmailAddress: string
        Message: string
    }

    @Component({})
    export default class App extends Vue {

        mounted() {
            const sectionOne = document.querySelector(".scroll-display")!;

            const sectionOneOptions = {
                rootMargin: "-100px 0px 0px 0px"
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

        showBar(event: any) {
            this.bgShow = !this.bgShow
        };

        isOpen: boolean = false;
        openMenu: boolean = false;
        bgShow: boolean = false;

        showThanks: boolean = false;




    }


</script>