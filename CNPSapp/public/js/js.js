const Informatique  = _('informatique');
const forInfo = _('forInfo');

const economie = _('economie');
const forEco = _('forEco');

const pedagogie = _('pedagogie');
const forPeda = _('forPeda');

const formContainer = _('formContainer');

economie.addEventListener('click', () =>
{
    informatique.classList.remove('active');
    economie.classList.add('active');

        if(forEco.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(-96%)';
          formContainer.style.transition = 'transform .1s';

          forEco.classList.remove('cacher');
          forPeda.classList.add('cacher');
          forInfo.classList.add('cacher');
        }
});

informatique.addEventListener('click', () =>

{
    economie.classList.remove('active');
    informatique.classList.add('active');

        if(forInfo.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(2%)';
          formContainer.style.transition = 'transform .1s';

          forInfo.classList.remove('cacher');
          forEco.classList.add('cacher');
          forPeda.classList.add('cacher');
        }
});

issa.addEventListener('click', () =>

{
    economie.classList.remove('active');
    issa.classList.add('active');

        if(forPeda.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(-193%)';
          formContainer.style.transition = 'transform .1s';

          forPeda.classList.remove('cacher');
          forEco.classList.add('cacher');
          forInfo.classList.add('cacher');
        }
});

issa.addEventListener('click', () =>

{
    informatique.classList.remove('active');
    issa.classList.add('active');

        if(forPeda.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(20%)';
          formContainer.style.transition = 'transform .1s';

          forPeda.classList.remove('cacher');
          forInfo.classList.add('cacher');
          forEco.classList.add('cacher');
        }
});


informatique.addEventListener('click', () =>

{
    issa.classList.remove('active');
    informatique.classList.add('active');

        if(forInfo.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(-10%)';
          formContainer.style.transition = 'transform .1s';

          forInfo.classList.remove('cacher');
          forPeda.classList.add('cacher');
          forEco.classList.add('cacher');
        }
});

economie.addEventListener('click', () =>

{
    issa.classList.remove('active');
    economie.classList.add('active');

        if(forEco.classList.contains('cacher'))
        {
          formContainer.style.transform = 'translateX(-30%)';
          formContainer.style.transition = 'transform .1s';
          forEco.classList.remove('cacher');
          forPeda.classList.add('cacher');
          forInfo.classList.add('cacher');
        }
});


function _(e)
{
    return document.getElementById(e);
}