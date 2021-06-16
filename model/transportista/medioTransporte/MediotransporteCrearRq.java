
package org.sieca.everis.pdcc.model.transportista.medioTransporte;

import org.sieca.everis.pdcc.model.util.RequestBody;
import org.sieca.everis.pdcc.model.transportista.MediosTransporte;
import org.sieca.everis.pdcc.model.transportista.Transportistas;

/**
 * @author ytorregl
 *
 */
public class MediotransporteCrearRq extends RequestBody{
	
	private Transportistas transportista;
    private MediosTransporte medioTransporte;
	/**
	 * 
	 */
	public MediotransporteCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the transportista
	 */
	public Transportistas getTransportista() {
		return transportista;
	}
	/**
	 * @param transportista the transportista to set
	 */
	public void setTransportista(Transportistas transportista) {
		this.transportista = transportista;
	}
	/**
	 * @return the medioTransporte
	 */
	public MediosTransporte getMedioTransporte() {
		return medioTransporte;
	}
	/**
	 * @param medioTransporte the medioTransporte to set
	 */
	public void setMedioTransporte(MediosTransporte medioTransporte) {
		this.medioTransporte = medioTransporte;
	}
    
    

}
