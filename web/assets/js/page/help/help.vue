<template>
    <div class="help">
        <collapse>
            <template v-slot:title>
                Are there any videos or presentations of GCentral online?
            </template>
            <template v-slot:body>
                Yes. You can see GCentral present its vision and mission at the <a href="https://www.gcentral.org/about-gcentral#h.p_MEdLgAHu-iYH" target="_blank">2019 CLA Summit in Austin Tx.</a>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                What do people think about GCentral?
            </template>
            <template v-slot:body>
                GCentral conducts a yearly survey.  At the conclusion of the survey (closes/opens at NIWeek) we report out results to our community. Please share your thoughts by taking the <a href="https://docs.google.com/forms/d/e/1FAIpQLSdezTBhFMZgtzdzSkXZ9DbrcPEj90QSlWuVGmHIOSlb5tcpMw/viewform" target="_blank">2020-21 survey here.</a>  In order to help ensure accuracy by preventing double voting, please sign in with your google account when prompted .
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Where can I find results from previous surveys?
            </template>
            <template v-slot:body>
                The survey summary is presented once you've completed a survey.  In addition, summaries and trends will be presented on GCentral.org once enough data has been collected. 
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How is GCentral different than other companies in the LabVIEW Community?
            </template>
            <template v-slot:body>
                GCentral is a non profit organization whose main purpose is enabling the G community to improve its own tools through collaboration. Whereas other companies may have a similar objective, GCentral is the only organization with this as its prime objective. Since GCentral is not driven by profit, the measure of our success is not financial, but in its positive effect on the G community. 
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How does GCentral enable collaboration?
            </template>
            <template v-slot:body>
                By providing resources that 
                <ol>
                    <li>Alleviate the pain of finding and using community code</li>
                    <li>Teach and enable G programmers to give their code to others</li>
                    <li>Teach and enable G programmers to develop each other’s code</li>
                </ol>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Wait, is there really a problem?
            </template>
            <template v-slot:body>
                Yes. Today G community members are often frustrated when trying to find tools and code others have posted on the web. There are too many places to look and most aren’t intuitive to find. Today code is stored on ni.com, lavag.org, the LabVIEW Tools Network, NI package manager, VI package manager, G package manager. These locations often don’t reference each other, so a new or even experienced G community member can easily miss code ALREADY WRITTEN that solves their problem, resulting in wasted time duplicating code.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                So, specifically, how will GCentral solve this problem?
            </template>
            <template v-slot:body>
                GCentral will create and maintain GCentral.org, the G community’s first package agnostic index exposed through a website. From a single website, a G community member will be able to search/find NI Packages, G Packages, and VI Packages. GCentral will create a repository where anyone can put a package, regardless of type (NI package, G Package, VI Package). This repository will be published through GCentral.org. Our intent is to also expose the GCentral repository through existing package managers.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                What about the other repositories that already exist like GPackage.io, the LabVIEW tools Network, vipm.jki.net/packages?
            </template>
            <template v-slot:body>
                <p>GCentral will work with other repository owners to expose their packages through GCentral.org. GCentral will expose packages regardless of package type.</p>
                <p>See the diagram below for a system level description.</p>
                <img src="/images/help/gc-repo.png">
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Aren’t you just creating "yet another repository"?
            </template>
            <template v-slot:body>
                No, GCentral isn’t just another repository. It will index and expose packages from other repositories as well as its own. GCentral will expose packages of all types (NI Packages, G Packages, VI Packages).  GCentral is creating a repository that can hold all three package types. The quality/completeness of code will not gate GCentral from publishing the package. 
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Will GCentral expose more than packages?
            </template>
            <template v-slot:body>
                No. GCentral will only expose code put in packages. However, a user may choose their packaging technology and the package's contents.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How is GCentral different from the NI Tools Network?
            </template>
            <template v-slot:body>
                GCentral will not gate publishing packages to the community like the NI Tools Network does. Anyone can publish a package of any type to the GCentral repository. The community will be able to rate packages for quality, completeness, etc.  GCentral will not rate the code's quality. GCentral will, however, enable the community to qualify packages submitted to the community.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                So GCentral is just a website? Basically a packaging index?
            </template>
            <template v-slot:body>
                <p>While GCentral is a website and a packaging index, our set of objectives is larger. Specifically GCentral has three objectives:</p>
                <ol>
                    <li>Ease finding and using code (accomplished through the global package index exposed through GCentral.org).</li>
                    <li>Minimize the amount of work necessary to publish packages for others to consume.</li>
                    <li>Enable members of the G community to co-develop.</li>
                </ol>
                <p>GCentral will create a community build process and template LabVIEW projects designed to export code into any/all package types.  GCentral will leverage collaboration tools  (like Git) to create template repositories ready for forking.</p>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Is GCentral.org yet another package manager?
            </template>
            <template v-slot:body>
                <p>No. GCentral.org is not a package manager, nor does GCentral recommend one package manager over another. GCentral provides an index of all packages, regardless of package type, exposed through a website as well as a set of tools that facilitate contribution and co-development. It is left to the community member to decide which package manager to use based on the characteristics of each.</p>
                <p>For an objective comparison of package managers see the <a href="https://labviewwiki.org/wiki/Package_Manager_Comparison" target="_blank">LabVIEW Wiki page comparing the package managers.</a></p>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How will GCentral pay for its offerings?
            </template>
            <template v-slot:body>
                <p>GCentral will be funded through donations from individuals and corporations. GCentral believes its value allows the G community to save time and development costs by leveraging each other's solutions.  GCentral will reduce developers wasting time recreating what already exists, but is hard to find . (See the donation page.)</p>
                <br>
                <p>We believe those most interested will be:</p>
                <ol>
                    <li>Companies that have mission critical applications based on the National Instruments tool chain, including LabVIEW</li>
                    <li>Companies that want to efficiently use the NI tool chain and rely on the availability of code</li>
                    <li>Alliance partners who want to more quickly develop solutions for applications vs develop support code</li>
                    <li>Individuals who want to develop code specific to an application vs write lower level code</li>
                </ol>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How can I join GCentral's efforts?
            </template>
            <template v-slot:body>
                <h5>Spread the word!</h5>
                <p>The easiest way to show your support of GCentral is to adding the GCentral logo to your ni.com profile using the following HTML.</p>

                <div>
                    <textarea class="copy-content" id="copysig" rows="2" cols="120" readonly>&lt;a href=&quot;https://www.gcentral.org&quot;&gt;&lt;img src=&quot;https://labviewwiki.org/w/images/a/a3/Gcentral_circle_logo.png&quot;alt=&quot;GCentral&quot; width=&quot;100&quot; height=&quot;100&quot; &gt;&lt;/a&gt;</textarea>
                    <a class="copy-link" @click="copysig"><img class="cmd-copy" src="/images/copy.png"></a>
                </div>
                <p>See the video below on how to edit your ni.com profile signature:</p>
                <img src="/images/help/share.gif">
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Use the GCentral logo
            </template>
            <template v-slot:body>
                The most current GCentral logo can always be found on the <a href="https://labviewwiki.org/wiki/File:Gcentral_circle_logo.png" target="_blank">LabVIEW Wiki.</a> Please redirect all clicks on the logo to https://gcentral.org where applicable. 
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Join the conversation on LavaG.org
            </template>
            <template v-slot:body>
                <a href="https://lavag.org/forum/56-gcentral/" target="_blank">LavaG has a new "GCentral" section</a> with one of the forums dedicated to <a href="https://lavag.org/topic/21200-user-personas-and-user-stories/" target="_blank">identifying personas and use cases.</a> We're looking for input on use cases to make sure GCentral aligns with our community's needs.  So please tell us your thoughts.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                Help develop the GCentral website
            </template>
            <template v-slot:body>
                <p>The source is located in GitHub at <a href="https://github.com/gcentral/Website" target="_blank">GCentral/Website repository.</a></p>
                <p>GCentral has <a href="https://www.linkedin.com/in/matthias-baudot-4b9b0537">Matthias Baudot</a> of <a href="https://www.studiobods.com/" target="_blank">StudioBods</a> and <a href="https://www.linkedin.com/in/siva-shankar-93855bba/" target="_blank">Siva Shankar</a> of <a href="https://www.solitontech.com/" target="_blank">Soliton Technologies</a> to thank for pioneering the original prototype.</p>
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                How can I financially support GCentral?
            </template>
            <template v-slot:body>
                <a href="/donate">See the donation page.</a> GCentral is a 501(c)3 organization. As a result, all donations are tax deductible.
            </template>
        </collapse>
        <collapse>
            <template v-slot:title>
                What are GCentral's Terms of Use?
            </template>
            <template v-slot:body>
                GCentral is not responsible for software or content accessed through GCentral or any repository or site referenced by GCentral. All software and content is subject to the terms and licenses specified by the package or website referenced by GCentral.
            </template>
        </collapse>
    </div>
</template>

<style scoped>
    .copy-content {
        font-family: monospace;
        border-radius: 0.25rem;
        background-color: #eee;
        padding: 10px 30px 10px 10px;
        outline: none;
        border: 0;
        resize: none;
    }

    .copy-link {
        position: relative;
        left: -30px;
        top: -30px;
        height: 28px;
    }

    .copy-link:active {
        background-color: rgba(200, 150, 90, 0.4);
    }

    .cmd-copy {
        height: 24px;
        cursor: pointer;
    }
</style>

<script>
import Collapse from '../../utils/collapse/collapse';

export default {
    id: "Help",
    components: {
        Collapse
    },
    methods: {
        copysig: function() {
            var copyText = document.getElementById('copysig');
            if (copyText != null) {
                copyText.select();
                document.execCommand("copy");
                window.getSelection().removeAllRanges();
            }
        }
    }
}
</script>